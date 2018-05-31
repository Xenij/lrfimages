
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script>
        		var  img1 = document.querySelector(".parallelogram-1");
var  img2 = document.querySelector(".parallelogram-2");
var  img3 = document.querySelector(".parallelogram-3");
img1.addEventListener("click", focusIn1);
img2.addEventListener("click", focusIn2);
img3.addEventListener("click", focusIn3);
//flags to check if the images are active
var active1 =false,active2 =false,active3 =false;

function focusIn1(){
if(!active1){ 
  img2.classList.add("hideImg");
  img3.classList.add("hideImg");   
}
 else{
setTimeout(function(){ 
img2.classList.remove("hideImg");
img3.classList.remove("hideImg");
}, 500);
     
   }
   active1=!active1;
} 

 function focusIn2(){
   if(!active2){
      img3.classList.add("hideImg");
      img1.classList.add("hideImg");
      img2.classList.add("paraSlideLeft");
         // img3.classList.remove("slideInRight");

   }
   else{
      img2.classList.remove("paraSlideLeft");
      img2.classList.remove("slideInRight");
     setTimeout(function(){ 
        img3.classList.remove("hideImg");
        img1.classList.remove("hideImg");  
     });
   }
   active2=!active2;
} 

 function focusIn3(){
   if(!active3){
  img1.classList.add("hideImg");
     img2.classList.add("hideImg");
           img3.classList.add("paraSlideLeft");
          img3.classList.add("slideInRight");

   }else{
     img3.classList.remove("paraSlideLeft");
     img3.classList.remove("slideInRight");
     setTimeout(function(){ 
     img2.classList.remove("hideImg");
     img1.classList.remove("hideImg");  
     });     
   }
 active3=!active3;
} 
        
        </script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
</html>
