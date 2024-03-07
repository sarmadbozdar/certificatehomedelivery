<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/order.css">
  <link rel="stylesheet" href="./src/ordr.css">

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
                <a href="#" class="text-xl wie hover:underline text-wrap text-sm md:text-xl " > Certificates Home Delivery Sindh </a>
            </div>
            <div class=" flex gap-3" >
                <a href="" class="bg-blue-500 px-2 py-2 hover:bg-blue-600  text-white text-nowrap" >Sign up</a>
            </div>
        </nav>
        <!-- *****************NAVBAR********************* -->
        
               <section class=" w-full md:px-10 px-5 mt-10 grid md:grid-cols-3 gap-3" >
                <div class="grid col-span-1  w-full p-5 border-black border-2 ">
                    <h1 class="text-center underline" > Order Summary</h1>
                    <form class="w-full h-auto" id="summaryContent" class="flex flex-col" action="">
                   

                    </form>
                    
                </div>
                <div class="grid col-span-2  w-full h-fit border-black border-2 " > test</div>
               </section>


        


        
        <!-- *****************FOOTER********************* -->
        <footer class="w-full h-[60px] mt-5" >
            <p class="text-center"  > &copy; 2024 Certificates Home Delivery Sindh </p>
            
        </footer>
        <!-- *****************FOOTER********************* -->

    </main>
</body>
</html>
