                                    



                                    var lc,canvas;
                                      $(document).ready(function(){
                                         canvas = document.getElementById('canvas');
                                        var ctx = canvas.getContext('2d');
                                        lc = LC.init(
                                                document.getElementsByClassName('literCanvas')[0],
                                                {
                                                  imageURLPrefix: 'img',
                                                  backgroundColor: 'white',
                                                  imageSize: {width: 422, height: 365},
                                                 tools: [LC.tools.Line,LC.tools.Eraser,
                                                    LC.tools.Rectangle, LC.tools.Ellipse, LC.tools.Eyedropper, LC.tools.Polygon, LC.tools.Pan,LC.tools.Text,LC.tools.Pencil],
                                                    toolbarPosition : 'top'
                                                }
                                            );
                                        lc.respondToSizeChange();
                                        $('#saveDesign').on('click',function(){
                                            var d =lc.getImage().toDataURL();
                                            var desc = $('#desc').val();
                                            if(desc != "" && desc != null){
                                            $('#cust_img_data').val(d);
                                            $('#newDesign').show();
                                            $('#displayhere').prepend('<div id="newsfeed" class="card relative wrapper"><a href=""><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black">Sample Person</span></a><p class="font-md" style="padding: 10px;">'+desc+'</p><img  id="myImg" class="img" name="cust_image" src="'+d+'"><p class="topcorner font-sm">01/06/2018 11:16 PM</p><span class="topcorner button fa fa-ellipsis-h"></span></div><br>');
                                            $('#newsfeed').hide();
                                            $('#newsfeed').show('blind');
                                            $('#desc').val('');
                                            lc.clear();

                                            }else{
                                                alert('Say Something!');
                                                $('#desc').val('');
                                                lc.clear();
                                            }
                                        });

                                        $('.paint-panel').hide();
                                        $('.letspaint').on('click', function(){
                                            $('.paint-panel').show('slow');
                                            $('.letspaint').hide('blind');
                                        });

                                        $('.paint-panel').focusout(function(){
                                            $('.letspaint').show('slow');
                                             $('.paint-panel').hide('blind');
                                        });

                                      });


                                      window.onload = function(){
                                        var modal = document.getElementById('myModal');

                                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                                        var img = document.getElementById('myImg');
                                        var modalImg = document.getElementById("img01");
                                        var captionText = document.getElementById("caption");
                                        img.onclick = function(){
                                            $('.literCanvas').hide();
                                            modal.style.display = "block";
                                            modalImg.src = this.src;
                                            captionText.innerHTML = this.alt;
                                        }

                                        // Get the <span> element that closes the modal
                                        var span = document.getElementsByClassName("close")[0];

                                        // When the user clicks on <span> (x), close the modal
                                        span.onclick = function() { 
                                          modal.style.display = "none";
                                          $('.literCanvas').show('blind');
                                        }
                                        }
