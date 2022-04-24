<?php
  include 'includes/header.php';
?>
  <div class="mt-6" x-data="{ open: true }">
    <!-- Button : Will be removed: it is used just to show how to controle modal via alpine @click eventS -->
    <!-- <button @click="open = true" class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline mx-auto">Open Modal(btn will be removed)</button> -->
    <!-- Modal -->
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.65);" x-show="open">
        <div class="h-auto mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:mx-0" @click.away="open = false">
          <a href="https://the-dubai-life.com/" target="_blank">
            <img src="../assets/images/v1.0.0/pupUp.png" alt="the dubai life" class="h-[500px] w-auto object-fit"/>
         </a>  
        </div>
    </div>
  </div>