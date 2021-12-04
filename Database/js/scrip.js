$(document).ready(function(){
    $('#btn-next').click(function(event){
    console.log(slide_sau.length);
    
if(slide_sau.length!=0){
    var slide_sau = $('.active').next();
    $('.active').addClass('bien-mat-ben-trai').one('webkiAnimationEnd',function(event){
        $('bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
          
    });
    slide_sau.addClass('active').addClass('di-vao-ben-phai').one('webkiAnimationEnd', function(event){
        $('di-vao-ben-phai').removeClass('di-vao-ben-phai');
});
}else{
    $('.active').addClass('bien-mat-ben-trai').one('webkiAnimationEnd',function(event){
        $('bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
        });   
    $('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkiAnimationEnd',function(event){
        $('di-vao-ben-phai').removeClass('di-vao-ben-phai');
    });    
}
    });
});