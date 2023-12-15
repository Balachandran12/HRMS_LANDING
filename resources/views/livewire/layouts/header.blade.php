<div class=" fixed top-0 bg-white w-full z-50 shadow-[0_2px_25px_-15px_rgba(0,0,0,0.3)]">
    <div class=" container mx-auto px-5 ">
        <header class="flex justify-between items-center pt-5 ">
            <div>
                <img src="/assets/icons/logo1.svg" alt="" class=" w-40 h-24">
            </div>
            <div class="relative lg:hidden " @click.outside="isOpen = false" x-data="{
                isOpen: false,
                toggle() {
                    this.isOpen = !this.isOpen
                }
                }">
                <button @click="toggle" class="flex items-center"  >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <template x-if="isOpen" class="" >
                    <div
                        class=" absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0">
                        <a href="#features" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            Features
                        </a>

                        <a href="#why-choose" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            Why Choose Us
                        </a>

                        <a href="#pricing" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            Pricing
                        </a>

                        <a href="#testimonials" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            Testimonials
                        </a>

                        <a href="#experience" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            Request a Demo
                        </a>

                        <a href="#faq" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            FAQ
                        </a>

                        <a href="#contact-us" class="flex items-center px-3 py-3 hover:bg-gray-200">
                            Contact Us
                        </a>
                    </div>
                </template>
            </div>
            <!-- list -->
            <ul class="lg:flex justify-between gap-x-8 items-center hidden ">
                <li class="hover:-translate-y-1 hover:transform hover:ease-in-out duration-300 "><a href="#home" class=" text-lg font-medium hover:border-b-2 border-[#FFDE17]  hover:-translate-y-4  hover:duration-100">Home</a></li>
                <li class="hover:-translate-y-1 hover:transform hover:ease-in-out duration-300 "><a href="#features" class=" text-lg font-medium hover:border-b-2 border-[#FFDE17]  hover:-translate-y-4  hover:duration-100">Features</a></li>
                <li class="hover:-translate-y-1 hover:transform hover:ease-in-out duration-300 " ><a href="#pricing" class=" text-lg font-medium hover:border-b-2 border-[#FFDE17]  hover:-translate-y-4  hover:duration-100">Pricing</a></li>
                <li class="hover:-translate-y-1 hover:transform hover:ease-in-out duration-300 "><a href="#testimonials" class=" text-lg font-medium hover:border-b-2 border-[#FFDE17]  hover:-translate-y-4  hover:duration-100">Testimonials</a></li>
                <li class="hover:-translate-y-1 hover:transform hover:ease-in-out duration-300 "><a href="#faq" class=" text-lg font-medium hover:border-b-2 border-[#FFDE17]  hover:-translate-y-4  hover:duration-100">FAQ</a></li>
            </ul>
            {{-- <div class="hidden lg:block ">
                <button class="bg-[#FFDE17] px-10  font-semibold py-3 rounded-lg"><a href="#demo">Request a
                        Demo</a></button>
            </div> --}}
            <div class="hidden lg:block hover:-translate-y-1 hover:transform hover:ease-in-out duration-300   ">
                <x-button size='xl' class="text-[#212121]">Request a Demo</x-button>
            </div>

        </header>
    </div>

    <style>

 /* #btn:hover{
    background-color: yellow;
    box-shadow: 0px 0px 5px yellow,0px 5px 2px yellow,0px 0px 80px yellow;
 } */

      input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
</div>
