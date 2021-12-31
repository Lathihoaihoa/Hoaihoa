
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>

<section>
    <div class="container flex flex-col flex-wrap px-4 py-16 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap justify-center">
        <div class="justify-center w-full mt-4 text-center lg:flex">
            <div class="box-border hover:box-content h-4/5 w-4/5 p-4 border-4 px-4 lg:w-1/3 md:w-1/2 px-1 py-1 bg-white m-px">
                <img src="<?= \App\asset_path('images/emcompass/logomap.png'); ?>" alt="logo" class="w-1/5 h-1/5  ml-auto mr-auto">
                <h3 class="font-bold ">9TH ĐẶNG THỊ NHƯ</h3>
                <p class="font-medium">
                    Lầu - 62 Đặng Thị như, Quận 1<br>
                    097364726478864<br>
                    10:00 am - 10:00 pm
                </p>
                <br>
                <h3 class="font-bold">9TH ĐẶNG THỊ NHƯ</h3>
                <p class="font-medium">
                    Lầu - 62 Đặng Thị như, Quận 1<br>
                    097364726478864<br>
                    10:00 am - 10:00 pm
                </p>
                
                <br>
                <button class="text-center text-white bg-red-500 w-2/3">
                    <a href="https://goo.gl/maps/zYxG61B1DFbELYNeA" rel="stylesheet">Xem bản đồ</a>
                </button>
                
            </div>
            <div class="box-border w-full px-4 lg:w-1/3 md:w-1/2 flex-1 mt-3">
                <img src="<?= \App\asset_path('images/emcompass/map.png'); ?>" alt="map" class="h-4/5 w-full">
            </div>
        </div>
    </div>
</section>


<footer class="border-t border-gray-200 bg-black">
      <div class=" container flex flex-col flex-wrap px-4 py-16 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap">
        <div class="justify-between w-full mt-4 text-center lg:flex">
          <div class="w-full px-4 lg:w-1/3 md:w-1/2">
            <h2 class="mb-2 font-bold tracking-widest text-white">
              LIÊN LẠC
            </h2>
            <hr>
            <ul class="mb-8 space-y-2 text-sm list-none text-white">
              <li>
                <a class="text-gray-600 hover:text-gray-800">thien@gmail.com</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">095253524</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Facebook</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 lg:w-1/3 md:w-1/2">
            <h2 class="mb-2 font-bold tracking-widest text-white">
              CÔNG TY CHÚNG TÔI
            </h2>
            <hr>
            <ul class="mb-8 space-y-2 text-sm list-none text-white">
              <li>
                <a class="text-gray-600 hover:text-gray-800">Tiểu sử</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Tuyển dụng</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 lg:w-1/3 md:w-1/2">
            <h2 class="mb-2 font-bold tracking-widest text-white">
              SẢN PHẨM
            </h2>
            <hr>
            <ul class="mb-8 space-y-2 text-sm list-none text-white">
              <li>
                <a class="text-gray-600 hover:text-gray-800">Quần áo</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Giày</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Sản phẩm bán chạy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <p class="text-base text-gray-400">
          All rights reserved by @ company 2021
        </p>
      </div>
    </footer>