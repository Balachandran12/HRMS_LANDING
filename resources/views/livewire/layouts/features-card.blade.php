<div>
    <div class="rounded-lg  bg-[#F9F5E4] p-5 lg:h-[230px] hover:-translate-y-2 hover:transform hover:ease-in-out duration-300">
        <!--inner div -->
        <div class="flex gap-x-3 items-center">
            <img src="/assets/icons/tick1.svg" alt=""
                class="bg-black p-2 rounded-tl-2xl rounded-tr-2xl rounded-br-2xl">
            <h2 class="font-bold text-lg ">{{$title}}</h2>
        </div>
        <div>
            <p class="mt-4 text-[16px] font-normal">{{$description}}</p>
        </div>

        <div class="pt-10  hover:duration-100  whitespace-normal">
            <a href="/features-elaboration#{{$link}}" class="flex gap-x-2  items-center lg:w-[110px] w-full hover:border-b-2 border-[#FFDE17]" >
                <span class="">Read More</span>
                <img src="/assets/icons/right-arrow.svg" alt="" class="w-4 h-4">
            </a>
        </div>
    </div>
    <!--inner div end-->
</div>
