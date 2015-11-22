(function($){
    var step = {
        intervalHolder: false,
        //its actually an index, not real "id"
        currentVidId: 1,
        //we leave all information here
        progress: {
            1: {
                link: 'http://wallstreetenglish.edu.vn/files/videos/we-build-confidence-before-speech-s1-resize.mp4',
                image: 'http://asdasd.png',
                unlocked: true, finish: true, iniBxSlider: false
            }
        },
        seeking: false,
        bxSliderConfig: {
            pause: 2000,
            infiniteLoop: false,
            preventDefaultSwipeX: true,
            touchEnabled: false,
            onSliderLoad: function(){
                $('.bx-pager-link.active').parent().addClass('active');
            },
            onSlideBefore: function($slideElement, oldIndex, newIndex){
                $slideElement = $slideElement.parents('.bx-wrapper');

                if(!$slideElement.find('.bx-pager-item a.js-finished[data-slide-index="'+ newIndex +'"]').length){
                    return false;
                }

                step.editPagerProgress(newIndex, $slideElement);
            },
            onSliderResize: function(newIndex){
                step.editPagerProgress(newIndex);
            },
            onSlideNext: function($e){
                if($e.hasClass('result-slider')){

                }
            }
            //,
            //onclickPagerBefore: function($e, index){
            //    return $e.hasClass('js-finished');
            //}
        },

        init: function(){
            //fetch the data from right nav and then store it to our local var
            var data = {};
            var tempVidId = 0;
            console.log('asd');
            $('#progress-panel li').each(function(k, v){
                var aElement = $(v).find('a');
                var unlocked = false;

                if(aElement.hasClass('video-lesson')){
                    tempVidId+=1;

                    if($(v).hasClass('active')){
                        unlocked = true;
                        step.currentVidId = tempVidId;
                    }

                    data[tempVidId] = {
                        link: aElement.data('video-url'), videoId: aElement.data('video-id'), videoIndex: k,
                        image: aElement.data('thumbnail'),
                        finish: true, iniBxSlider: false, unlocked: unlocked, homework: null
                    };

                } else if(aElement.hasClass('homework')) {
                    data[tempVidId].homework = {
                        index: k,
                        homeworkId: aElement.data('homework-id'),
                        unlocked: false, finish: false
                    };
                }
            });
            this.progress = data;

            //player init
            this.playerInstance = jwplayer("player");
            this.playerInstance.setup({
                //file: "http://wallstreetenglish.edu.vn/files/videos/we-build-confidence-before-speech-s1-resize.mp4"
            }).onTime(function(event){
                var progress = step.getCurVidInfo();

                if (!step.seeking){
                    progress.currentPosition = Math.max(event.position, progress.currentPosition);
                    step.updateCurVidInfo(progress);
                }

            }).onSeek(function(){
                var progress = step.getCurVidInfo();
                if (!step.seeking) {
                    step.seeking = true;
                    setTimeout(function () {
                        jwplayer('player').seek(progress.currentPosition);
                    }, 100)
                } else
                    step.seeking = false;

            }).on('ready', function(){

                $('#progress-panel').css('height', this.getHeight());

            }).on('play', function(){
                var progress = step.getCurVidInfo();

                progress.currentPosition = 0;
                step.updateCurVidInfo(progress);
            }).on('complete', function(){
                step.progress[step.currentVidId].finish = true;
            });
            this.playerInstance.load([{
                file: this.getCurVidInfo().link,
                image: this.getCurVidInfo().image
            }]);


            //button init
            $('.view-homework').click(function(){
                var progress_info = step.getCurVidInfo();
                var $this = $(this);

                if(progress_info === undefined)
                    return false;

                //if the video isnt unlocked yet or it isnt finish, do nothing
                if(!progress_info.unlocked || !progress_info.finish)
                    return false;

                step.updateNavStatus(progress_info.homework.index);

                //get pair container
                var pair_container = $this.parents('.pair-container');
                pair_container.find('.video-description').addClass('hidden').end()
                    .find('.homework-content').removeClass('hidden').end()
                    .find('.view-description').removeClass('hidden').end()
                    .find('.view-homework').addClass('hidden');

                if(!progress_info.iniBxSlider){
                    var slider = pair_container.find('.bxslider').bxSlider(step.bxSliderConfig);
                    step.progress[step.currentVidId].slider = slider;
                    progress_info.iniBxSlider = true;
                }

                //unlock homework
                progress_info.homework.unlocked = true;

                //update the var
                step.updateCurVidInfo(progress_info);
            });
            //view description button
            $('.view-description').click(function(){
                var progress_info = step.getCurVidInfo();
                var $this = $(this);

                if(progress_info === undefined)
                    return false;

                //if the video isnt unlocked yet, do nothing
                if(!progress_info.unlocked)
                    return false;

                var pair_container = $this.parents('.pair-container');
                pair_container.find('.video-description').removeClass('hidden').end()
                    .find('.homework-content').addClass('hidden').end()
                    .find('.view-description').addClass('hidden').end()
                    .find('.view-homework').removeClass('hidden');
            });

            //right Nav click
            $('.progress-name').click(function(){
                var e = $(this);

                //if(e.hasClass('video-lesson')){

                //loop through the local progress variable
                $.each(step.progress, function(k, tempData){

                    //if user clicks on video link
                    if(e.data('video-id') == tempData.videoId && tempData.unlocked){
                        step.loadVideo(tempData);
                        var pairContainer = step.loadPairContainer(tempData.videoId);

                        //update the current video index after triggers an id dependent part
                        step.updateCurVid(k);
                        if(pairContainer){
                            pairContainer.find('.view-description').trigger('click');
                        }
                    }
                    //user clicks on the homework link
                    else if(e.data('homework-id') == tempData.homework.homeworkId && tempData.homework.unlocked) {

                        var pairContainer = step.loadPairContainer(tempData.videoId);

                        //update the current video index after triggers an id dependent part
                        step.updateCurVid(k, true);
                        if(pairContainer){
                            pairContainer.find('.view-homework').trigger('click');
                            $('html, body').animate({
                                scrollTop: pairContainer.find('.homework-content').offset().top
                            }, 800);
                        }
                    }

                });

                //} else {
                //
                //}
            });
            $('.unlock-next-video').click(function(){
                //step.validateHomework();
                //a = step.validator.form();
                step.unlocknextVid();
            });

            //click to an answer to move to the next slide
            $(document).on('click', '.answer-content label', function(){
                //clear the last interval
                clearInterval(step.intervalHolder);
                step.intervalHolder = setInterval(function(){
                    step.unlockNextQuestion();
                }, 500);
            });

            //form error
            //step.validator = $('#user-form').validate({
            //    ignore: '',
            //    debug: true,
            //    showErrors: function(e){
            //        var validate = this;
            //        $.each(e, function(k, v){
            //            var firstError = validate.findByName(k);
            //
            //            console.log(step.getPairId());
            //            var pairContainer = firstError.parents('#'+step.getPairId());
            //
            //            if(pairContainer.length){
            //                console.log('asdasd');
            //            }
            //
            //            return false;
            //        });
            //    },
            //    invalidHandler: function(e){
            //        console.log(e);
            //    }
            //});
            //a = step.validator;
        },

        getCurVidInfo: function(){
            return this.progress[this.currentVidId];
        },
        getPairId: function(){
            return 'pair' + this.currentVidId;
        },
        updateCurVidInfo: function(data){
            return this.progress[this.currentVidId] = data;
        },
        /**
         * Update the video's index to our local variable
         * @param index The index of a video
         * @param updatePlayer  Update the current player video url
         * @returns {*}
         */
        updateCurVid: function(index, updatePlayer){
            index = parseInt(index);
            if(typeof index == 'number'){
                this.currentVidId = index;

                if(updatePlayer){
                    this.loadVideo(index);
                }

                return index;
            }
            return false;
        },
        editPagerProgress: function(index, container){

            if(container === undefined)
                var paperLink = $('.bx-pager-link');
            else
                var paperLink = container.find('.bx-pager-link');

            paperLink.each(function (k, e) {
                var $e = $(e);
                if($e.data('slide-index') < index)
                    $e.addClass('finished js-finished').parent().addClass('active');
                else if($e.data('slide-index') == index)
                    $e.addClass('js-finished').parent().addClass('active');
                else
                    $e.removeClass('finished').parent().removeClass('active');

            });
        },

        updateNavStatus: function(index){
            $('#progress-panel li').each(function (k, e) {
                var $e = $(e);
                if(k < index)
                    $e.addClass('finished').removeClass('active');
                else if(k == index)
                    $e.addClass('active').removeClass('waiting');
            });
        },

        unlockNextQuestion: function(){
            var sliderInstance = step.progress[step.currentVidId].slider;

            var nextSlideIndex = sliderInstance.getCurrentSlide()+1;
            //go to the pager a element and add class js-finished to it, otherwise onSliderBefore will not allow the slider to move
            sliderInstance.parents('.homework-content').find('.bx-pager-item a[data-slide-index="' + nextSlideIndex + '"]').addClass('js-finished');
            sliderInstance.goToNextSlide();
            clearInterval(step.intervalHolder);
        },
        unlocknextVid: function(){
            this.progress[this.currentVidId].finish = true;
            this.progress[this.currentVidId+1].unlocked = true;
            var nextVid = this.progress[this.currentVidId+1];

            //show the pair div matches the videoId
            $('.pair-container').each(function(k,v){
                var e = $(v);
                var tempVidId = e.attr('id');

                if(tempVidId == 'pair'+nextVid.videoId){
                    e.removeClass('hidden');
                } else {
                    e.addClass('hidden');
                }
            });
            step.updateNavStatus(nextVid.videoIndex);

            this.loadVideo(nextVid);

            $('html, body').animate({
                scrollTop: $("#player").offset().top
            }, 800);
        },
        loadVideo: function(video){
            if(typeof video == "number")
                video = this.progress[video];

            if(typeof video != 'object')
                return false;

            this.currentVidId = video.videoId;
            this.playerInstance.load([{
                file: video.link,
                image: video.image
            }]);
        },

        /**
         * Open the correct pair container based on the given id
         * @param id
         */
        loadPairContainer: function(id){
            var e = $('.pair-container').each(function(k,v){
                var e = $(v);
                var tempVidId = e.attr('id');

                if(tempVidId == 'pair'+id){
                    e.removeClass('hidden');
                    return e;
                } else {
                    e.addClass('hidden');
                }
            });

            return e;
        }

    };
    step.init();
})(jQuery);