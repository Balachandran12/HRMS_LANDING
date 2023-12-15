<div>
        <!-- Contact us start-->
        <div id="demo" class=" bg-[#231F20]">
            <div class="container mx-auto py-20 lg:p-20">
                <h1 id="experience" class="font-title p-5  text-center text-2xl font-bold text-yellow-400">Experience Our Product
                    First-Hand</h1>
                <p class="mb-5 text-center p-5 text-lg text-white">Request a personalized demo tailored to your unique
                    requirements. Fill in the form below, and our team will get in touch with you shortly to schedule
                    your live demonstration.</p>
                <div class="space-y-5 p-5 shadow-xl">

                    @if (session()->has('message'))
                    <div class="bg-[#FFDE17] rounded-md text-center text-xl p-3 "wire:poll.keep-alive>
                        {{ session('message') }}
                    </div>
                @endif

                    <form wire:submit="createUser" method="POST">
                        @csrf
                        {{-- <input type="text" class="border border-black" wire:model="name"> --}}
                        <div class="grid grid-cols-2 gap-4">
                            <div class="">

                                <label class="">
                                    <span for="full_name" class="text-white">
                                        Full Name
                                    </span>
                                    <sup class=" text-red-700">*</sup>
                                </label>
                                {{--    <x-input id="full_name" name="Full Name" type="text"   class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none" placeholder="Full Name"
                                required  /> --}}

                                <input id="full_name" name="Full Name" type="text"
                                class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none" placeholder="Full Name"
                                     wire:model="name" />
                                      <div class="text-red-500">@error('name') {{ $message }} @enderror</div>
                            </div>

                            <div class="">

                                <label class="">
                                    <span for="full_name" class="text-white">
                                        CompanyName
                                    </span>
                                    <sup class=" text-red-700">*</sup>
                                </label>

                                {{--  <x-input id="company_name" name="Company Name" type="text"
                                class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                                placeholder="Company Name" required  /> --}}

                                <input id="full_name" name="Full Name" type="text"
                                class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none" placeholder="company Name"
                                     wire:model="company" />
                                    <div class="text-red-500">@error('company') {{ $message }} @enderror</div>

                            </div>

                            <div>
                                <label for="email_id" class="text-white">
                                    <span>
                                        Company Email
                                    </span>
                                    <sup class=" text-red-700">*</sup>
                                </label>

                                <input id="email_id" name="Company Email" type="email"
                                    class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                                    placeholder="Company Email"   wire:model="companyEmail"/>
                                    <div class="text-red-500">@error('companyEmail') {{ $message }} @enderror</div>

                            </div>
                            <div>

                                <label for="phone_number" class="text-white">
                                    <span>
                                        Phone Number
                                    </span>
                                    <sup class=" text-red-700">*</sup>
                                </label>

                                {{--      <x-input id="phone_number" name="Phone Number" type="number"
                            class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                            placeholder="Phone Number" required  maxlength="10" maxlength="10" oninput="validateNumber(this)"  /> --}}

                                <input id="phone_number" name="Phone Number" type="number"
                                    class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                                    placeholder="Phone Number"  maxlength="10" maxlength="10" oninput="validateNumber(this)"  wire:model="phoneNumber" />
                                    <div class="text-red-500" >@error('phoneNumber') {{ $message }} @enderror</div>

                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="date" class="text-white">
                                <span>
                                    Preferred Date for Demo
                                </span>
                                <sup class=" text-red-700">*</sup>
                            </label>

                            {{--   <x-input id="date" name="Preferred Date for Demo" type="date"
                            class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                            placeholder="Preferred Date for Demo" required  /> --}}
                            <input id="date" name="Preferred Date for Demo" type="date"
                            class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                                placeholder="Preferred Date for Demo"  wire:model="date"/>
                                <div class="text-red-500">@error('date') {{ $message }} @enderror</div>

                        </div>
                        <div class="mt-4">
                            <label for="message" class="text-white">Message</label>

                            {{-- <textarea name="message" id="message" rows="7"
                                class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                                placeholder="Write your message..." required></textarea> --}}
                            <textarea name="message" id="message" rows="7"
                            class="w-full px-4 py-2 mt-2 rounded-lg focus:outline-none"
                                placeholder="Write your message..."  wire:model="message"></textarea>
                                <div class="text-red-500">@error('messages') {{ $message }} @enderror</div>
                                
                        </div>

                        <div class="mt-5"> 
                            
                            <x-button size="xl" class=" w-full mt-10 ">Request Demo</x-button>
                                {{-- <button  class="bg-white p-4 font-bold">Request Demo</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact us end-->


        <script>
            function validateNumber(input) {
            // Remove non-numeric characters
            input.value = input.value.replace(/\D/g, '');
            // Limit the input to 10 digits
            if (input.value.length > 10) {
                input.value = input.value.slice(0, 10);
            }
        }
        </script>
</div>






