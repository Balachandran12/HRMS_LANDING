<div class="px-5 container mx-auto">
    <!-- footer faq section open  -->
    <div class=" pb-20">
      <div id="faq" class=" w-full">
          <h1 class="text-center py-14 text-[32px] font-benguiat font-bold banner">FAQ</h1>
      </div>
      <div class=" lg:flex lg:justify-center lg:px-16">
          <div class="rounded-2xl border-2 bg-[#F9F5E4] py-10 lg:px-8 w-full">
              <div x-data="{open:false}">
                  <div class="flex justify-between m-5">
                      <h3 class="font-semibold lg:text-lg ">What is the cost of the software?</h3>
                      <img x-on:click="open=!open"
                          x-bind:src="open ? '/assets/icons/arrow.svg' : '/assets/icons/right.svg'"
                          alt="" class="w-5 cursor-pointer">
                  </div>
                  <div x-show="open" x-cloak x-transition.duration.400ms>
                      <p class="m-5 font-normal text-sm">Our pricing depends on the size of your company and the
                          features you require. We have several plans to suit different needs. Please visit our
                          Pricing page for more details.</p>
                  </div>
              </div>
              <div class="border-[#878787] border-b mx-5 "></div>
              <div x-data="{open:false}">
                  <div class="flex justify-between m-5">
                      <h3 class="font-semibold lg:text-lg">How secure is your software?</h3>
                      <img x-on:click="open=!open"
                          x-bind:src="open ? '/assets/icons/arrow.svg' : '/assets/icons/right.svg'"
                          alt="" class="w-5 cursor-pointer">
                  </div>
                  <div x-show="open" x-cloak x-transition.duration.400ms>
                      <p class="m-5  font-normal text-sm">We take security very seriously. Our software uses
                          high-grade encryption and multiple layers of security measures to protect your data. We
                          comply with all relevant data protection regulations.</p>
                  </div>
              </div>
              <div class="border-[#878787] border-b mx-5"></div>
              <div x-data="{open:false}">
                  <div class="flex justify-between m-5">
                      <h3 class="font-semibold lg:text-lg pr-10">Is there a limit to the number of employees that can be
                          managed using your software?</h3>
                      <img x-on:click="open=!open"
                          x-bind:src="open ? '/assets/icons/arrow.svg' : '/assets/icons/right.svg'"
                          alt="" class="w-5 cursor-pointer">
                  </div>
                  <div x-show="open" x-cloak x-transition.duration.400ms>
                      <p class="m-5  font-normal text-sm">Our software is scalable and can handle anything from
                          small
                          teams to large corporations with thousands of employees.</p>
                  </div>
              </div>
              <div class="border-[#878787] ml-5 border-b mr-5 "></div>
              <div x-data="{open:false}">
                  <div class="flex justify-between m-5">
                      <h3 class="font-semibold lg:text-lg">Can I integrate this software with other systems? </h3>
                      <img x-on:click="open=!open"
                          x-bind:src="open ? '/assets/icons/arrow.svg' : '/assets/icons/right.svg'"
                          alt="" class="w-5 cursor-pointer">
                  </div>
                  <div x-show="open" x-cloak x-transition.duration.400ms>
                      <p class="m-5  font-normal text-sm">Yes, our software can be integrated with several popular
                          platforms. For more specific information, please contact our support team.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- footer faq section end  -->
  </div>
  