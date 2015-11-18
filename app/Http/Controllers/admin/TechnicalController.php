<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Libs\SIFunctions;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class TechnicalController extends Controller {
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $req) {
        /*$client = new \Google_Client();
        $client->setAuthConfigFile(app_path('client_secret_302066283904-nbslege32jnsup9pulqo78fv3b39s80i.apps.googleusercontent.com.json'));
        $client->addScope(\Google_Service_Drive::DRIVE_METADATA_READONLY);
        $client->setDeveloperKey('DVWgdu_GkC_rJjwst_m0NN6M');
        $service = new \Google_Service_Drive($client);
        $optParams = array(
            'maxResults' => 10,
        );
        $results = $service->files->listFiles($optParams);

        if (count($results->getItems()) == 0) {
            print "No files found.\n";
        } else {
            print "Files:\n";
            foreach ($results->getItems() as $file) {
                printf("%s (%s)\n", $file->getTitle(), $file->getId());
            }
        }
        exit();*/

        /*if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
            $drive_service = new Google_Service_Drive($client);
            $files_list = $drive_service->files->listFiles(array())->getItems();

        } else {
            $redirect_uri = Redirect::route('technical.oauth2callback');
            header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }*/

        /*$sess = $req->session('access_token');
        var_dump($sess);
        exit();*/
        return view('admin.technical.index');
    }
    public function oauth2callback(Request $req){
        $code = $req->input('code');
        $client = new \Google_Client();
        $client->setAuthConfigFile(app_path('client_secret_302066283904-nbslege32jnsup9pulqo78fv3b39s80i.apps.googleusercontent.com.json'));
        $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/admin/technical/oauth2callback');
        $client->addScope(\Google_Service_Drive::DRIVE_METADATA_READONLY);
        if (! isset($code)) {
            $auth_url = $client->createAuthUrl();
            header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
        } else {
            $client->authenticate($_GET['code']);
            $req->session()->put('google_access_token',$client->getAccessToken());
            $redirect_uri = Redirect::to('/');
            header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }
    }
}
?>