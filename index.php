<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/output.css">

  <style>
    @font-face {
        font-family: roboto;
        src: url(./src/roboto-v20-latin-regular.woff2);
    }
   
    *{
        font-family: roboto;
    }
  </style>

</head>
<body>
    <main class="w-full relative bg-sky-50 font-roboto">
        <!-- *****************NAVBAR********************* -->
        <nav class="w-full h-[60px] md:px-10 px-5 flex items-center justify-between">
            <div>
                <a href="index.html" class="text-xl wie hover:underline text-wrap text-sm md:text-xl rounded-sm  border-black border-2" > Certificates Home Delivery Sindh </a>
            </div>
            <div class=" flex gap-3" >
                <a href="/order.html" class="bg-blue-500 px-2 py-2 hover:bg-blue-600  text-white text-nowrap" >Sign up</a>
            </div>
        </nav>
        <!-- *****************NAVBAR********************* -->
        
        
        <section class="w-full md:px-10 px-5 mt-10 grid md:grid-cols-2" >
            <div class="w-full h-auto grid col-span-1 border-2 p-5 bg-green-50" ><h1 class=" md:text-4xl text-2xl text-left" >We will deliver your university, college, and school certificates, degrees, and other documents safely to your home.</h1>  </div>
            <div class="w-full h-auto grid col-span-1 border-2 p-5 bg-sky-50 " > <h1 class="md:text-4xl text-2xl text-right" >ہم آپ کے یونیورسٹی، کالج، اور اسکول کے سرٹیفیکیٹ  ڈگری  اور دیگر دستاویزات کو آپ کے گھر تک محفوظی کے ساتھ پہنچائیں گے۔ </h1> </div>
         </section>
                <br>
         <hr>
         <br>
         <center> <h1 class="text-4xl underline"  >Services</h1> </center>
         <br>
         <hr>

         <h1 class="ml-10 mt-5 text-2xl underline text-wrap"> Board of Intermadiate and Secondary Education </h1>

         <section class="w-full md:px-10 px-5 mt-10 md:flex md:flex-row flex-col gap-8" >


         <form id="checkboxForm" class="p-5 flex flex-col border-2 gap-2" action="order.php" method="post">
    <input class="underline text-sm mb-5 text-wrap bg-sky-50 outline-none" type="text" name="category" value="Matric Certificates" readonly>
    <div>
        <input type="checkbox" name="Marksheet" value="1000" id="marksheetCheckbox">
        <label for="marksheetCheckbox">Marksheet</label>
    </div>
    <div>
        <input type="checkbox" name="Pass Certificate" value="800" id="passCertificateCheckbox">   
        <label for="passCertificateCheckbox">Pass Certificate</label>
    </div>
    <div>
        <input type="checkbox"  name="Pacca Certificate" value="2000" id="paccaCertificateCheckbox">
        <label for="paccaCertificateCheckbox">Pacca Certificate</label>
    </div>
    <div>
                    <label for="totalPrice">Rs:</label>
                    <input id="totalPriceInput" class="bg-sky-50 outline-none ml-2 totalPriceInput" type="text" value="0" readonly>
                </div>
    
    <div class="w-full flex justify-end mt-5">
        <input type="submit" name="order" value="Order Now" class="bg-blue-500 w-fit p-1 px-2 cursor-pointer text-white hover:bg-blue-600">
    </div>
</form>




            <form id="checkboxForm" class="p-5 flex flex-col border-2 gap-2" action="checkout.php" method="post">
                <input class="underline text-sm mb-5 text-wrap bg-sky-50 outline-none " type="text" name="category" value="Intermadiate Certificates" readonly>
                <input type="text" name="category" value="Intermadiate Certificates" hidden>
                <div>
                    <input type="checkbox" name="marksheet" value="1200">
                    <label for="marksheetCheckbox">Marksheet</label>
                </div>
                <div>
                    <input type="checkbox" name="passCertificate" value="900">   
                    <label for="passCertificateCheckbox">Pass Certificate</label>
                </div>
                <div>
                    <input type="checkbox"  name="paccaCertificate" value="2200">
                    <label for="paccaCertificateCheckbox">Pacca Certificate</label>
                </div>
                <div>
                    <label for="totalPrice">Rs:</label>
                    <input class="bg-sky-50 outline-none ml-2" type="text" value="0" readonly>
                </div>
                <div class="w-full flex justify-end mt-5">
                    <input type="submit" name="order" value="Order Now" class="bg-blue-500 w-fit p-1 px-2 cursor-pointer text-white hover:bg-blue-600">
                </div>
            </form>






            

            


         </section>

         <h1 class="ml-10 mt-5 text-2xl underline text-wrap"> University Documents </h1>


         <section class="w-full md:px-10 px-5 mt-10 md:flex md:flex-row flex-col gap-8" >



            <form id="checkboxForm" class="p-5 flex flex-col border-2 gap-2" action="checkout.php" method="post">
                <input class="underline text-sm mb-5 text-wrap bg-sky-50 outline-none " type="text" name="category" value="University of Sindh" readonly>
                <input type="text" name="category" value="University Of Sindh" hidden>
                <div>
                    <input type="checkbox" name="marksheet" value="1200">
                    <label for="marksheetCheckbox">Marksheet</label>
                </div>
                <div>
                    <input type="checkbox" name="passCertificate" value="900">   
                    <label for="passCertificateCheckbox">Pass Certificate</label>
                </div>
                <div>
                    <input type="checkbox"  name="paccaCertificate" value="2200">
                    <label for="paccaCertificateCheckbox">Pacca Certificate</label>
                </div>
                <div>
                    <label for="totalPrice">Rs:</label>
                    <input class="bg-sky-50 outline-none ml-2" type="text" value="0" readonly>
                </div>
                <div class="w-full flex justify-end mt-5">
                    <input type="submit" name="order" value="Order Now" class="bg-blue-500 w-fit p-1 px-2 cursor-pointer text-white hover:bg-blue-600">
                </div>
            </form>


            <form id="checkboxForm" class="  p-5 flex flex-col border-2 gap-2" action="checkout.php" method="post">
                <input class=" underline text-sm mb-5 bg-sky-50 outline-none " type="text" name="category" value="Agriculture University Tandojam" readonly>
                <input type="text" name="category" value="Agriculture University Tandojam" hidden>
                <div>
                    <input type="checkbox" name="marksheet" value="1200">
                    <label for="marksheetCheckbox">Marksheet</label>
                </div>
                <div>
                    <input type="checkbox" name="passCertificate" value="900">   
                    <label for="passCertificateCheckbox">Pass Certificate</label>
                </div>
                <div>
                    <input type="checkbox"  name="paccaCertificate" value="2200">
                    <label for="paccaCertificateCheckbox">Pacca Certificate</label>
                </div>
                <div>
                    <label for="totalPrice">Rs:</label>
                    <input class="bg-sky-50 outline-none ml-2" type="text" value="0" readonly>
                </div>
                <div class="w-full flex justify-end mt-5">
                    <input type="submit" name="order" value="Order Now" class="bg-blue-500 w-fit p-1 px-2 cursor-pointer text-white hover:bg-blue-600">
                </div>
            </form>


         </section>


        


        
        <!-- *****************FOOTER********************* -->
        <footer class="w-full h-[60px] mt-5" >
            <p class="text-center"  > &copy; 2024 Certificates Home Delivery Sindh </p>
            
        </footer>
        <!-- *****************FOOTER********************* -->

    </main>

    <script>
        
    </script>



</body>
</html>