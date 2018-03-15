                                    


                                        var lc,canvas;
                                      $(document).ready(function(){
                                        //userid
                                        var userID = $('#userID').val();
                                        //
                                        //PAINTING CANVAS INITIALIZATION
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
                                            // $('body').append('<input type="file" id="imgfile" style="display:none">');
                                            // $('#imgfile').val(d);
                                            var desc = $('#desc').val();
                                            var username = $('#usernameid').html();
                                            var userids = $('#userid').html();
                                            if(desc != "" && desc != null){
                                            $('#cust_img_data').val(d);
                                            //var imgs = $('#cust_img_data').val();
                                            //var imgs = $('#imgfile').val();
                                            //var blob = dataURItoBlob(d);

                                            $('#newDesign').hide();

                                            $('#newDesign').show('blind');

                                            

                                            $.ajax({
                                                    type: 'post',
                                                    url: '../func/post.php',
                                                    data: {
                                                        userid:userids,img:d,descr:desc,
                                                    },
                                                    success: function(response){
                                            $('#displayhere').prepend('<div class="theme-noborder relative wrapper" style="border:1px solid; border-color: #9bf281;" id="newsfeed"><div style="padding: 5px;"><a href="profile.php"><img src="/moreimg/img_avatar.png" class="profile-img" style="height: 50px; width: 50px;"><span class="black">'+username+'</span></a>        <p class="font-md" style="padding: 10px;">'+desc+'</p>        </div>        <img  id="myImg" class="img" name="cust_image" src="'+d+'">        <div style="padding: 5px;">        <p class="topcorner font-sm">'+response+'</p>        <span class="topcorner button fa fa-close"></span>        <button class="theme-noborder">Comments</button>        </div>        </div>       <br>');
                                                $('#newsfeed').hide();
                                                $('#newsfeed').slideToggle();
                                                    }

                                                });
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

                                        $('#notifbtn').on('click',function(){
                                            $('#notif').show('blind');
                                            $('#gobckbtn').show('blind');
                                            $('#news').hide('blind');
                                        });


                                        $('#msgbtn').on('click',function(){
                                            $('#msg').show('blind');
                                            $('#gobckbtn').show('blind');
                                            $('#news').hide('blind');
                                        });

                                        $('#gobck').on('click',function(){

                                            $('#gobckbtn').hide('blind');
                                            $('#notif').hide('blind');
                                            $('#msg').hide('blind');
                                            $('#news').show('blind');
                                        });

                                         $('#upload').on('click',function(){

                                                $('#uploadFile').click();

                                            });

                                         $('.fbtn').on('click',function(){

                                            var flw = $(this).val();

                                            $.ajax({
                                                    type: 'post',
                                                    url: '../func/follow.php',
                                                    data: {
                                                        userid: userID, flwid: flw,
                                                    },
                                                    success: function(response){
                                                        $('#'+flw).hide('blind');
                                                    }

                                                });

                                         });

                                        function dataURItoBlob(dataURI) {
    // convert base64/URLEncoded data component to raw binary data held in a string
    var byteString;
    if (dataURI.split(',')[0].indexOf('base64') >= 0)
        byteString = atob(dataURI.split(',')[1]);
    else
        byteString = unescape(dataURI.split(',')[1]);

    // separate out the mime component
    var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

    // write the bytes of the string to a typed array
    var ia = new Uint8Array(byteString.length);
    for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }

    return new Blob([ia], {type:mimeString});
}



                                    // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
                                       
                                    });


