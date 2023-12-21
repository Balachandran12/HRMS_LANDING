<div>

    <style>
#features{
    scroll-margin-top: 60px;
}
#pricing{
    scroll-margin-top: 320px;
}
#testimonials{
    scroll-margin-top: 70px;
}
   #demo{
    scroll-margin-top: 50px;
   }
   #faq{
    scroll-margin-top: 80px;
}
#pricing{
    scroll-margin-top: 150px;
}
#why-choose{
    scroll-margin-top: 100px;
}
#experience{

    scroll-margin-top: 110px;
}
#contact-us{
    scroll-margin-top: 130px;
}
    </style>

    <header>
        <livewire:layouts.header />
    </header>

    {{-- banner  --}}
    <livewire:home.banner />

    {{-- features  --}}
    <div class="py-8 feature container mx-auto md:px-10 lg:px-5 px-5 lg:py-10  " id="features" >
        <div  class=" text-center">
            <h1 class="font-benguiat font-bold text-[32px] py-8 banner">Features</h1>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 ">
            <livewire:layouts.features-card title="Employee Management" link="employee"
                description="Centrally manage all employee data, from contact information to job roles. The feature provides an organized, searchable database of all your employees." />
            
            <livewire:layouts.features-card title="Time Off Management"
                description="Easily track and manage employee leave requests, approvals, and balances. Automate your time-off processes and ensure fairness and transparency." link="Timeoff" />
            <livewire:layouts.features-card title="Performance Management"
                description="Facilitate regular feedback and performance reviews. Set goals, track progress, and foster a culture of continuous improvement and recognition." link="Performance"/>
            <livewire:layouts.features-card title="Reporting/HR Analytics"
                description="Simplify contract creation, storage, and tracking. Ensure all employment agreements are accurate, up-to-date, and easily accessible." link="Reporting"/>
            <livewire:layouts.features-card title="Onboarding & Offboarding"
                description="Make data-driven decisions with insightful reports and analytics. Understand your workforce trends, measure HR impact, and forecast future needs effectively." link="Onboarding"/>
            <livewire:layouts.features-card title="Learning Management System"
                description="Effortlessly track and manage employee hours for each task, ensuring accurate and streamlined time reporting." link="Learning"/>
            <livewire:layouts.features-card title="Timesheet Management"
                description="Simplify payroll management with accurate and compliant processing, ensuring timely and correct employee payments." link="Timesheet" />
            <livewire:layouts.features-card title="Payroll Management"
                description="Simplify payroll management with accurate and compliant processing, ensuring timely and correct employee payments." link="Payroll" />

        </div>
        <div class=" mt-5 flex justify-center">
            <div class=" lg:w-[550px] md:w-[650px] sm:px-5 md:px-0 xl:w-[650px]">
                <livewire:layouts.features-card title="Recruitment Management"
                description="Optimize your hiring process with our robust recruitment module, making it easier to attract, assess, and onboard top talent." link="Recruitment" />
            </div>
        </div>


        <div class=" lg:flex justify-center pt-12 hidden ">
            <x-button size="lg">View More Features</x-button>
        </div>
    </div>

    {{-- benefits  --}}
    <div id="why-choose">
        <livewire:home.benefits />
    </div>
    

    {{-- pricing  --}}
    <div class=" container mx-auto px-5 " id="pricing">
        <livewire:home.pricing  />
        <h1 class="mt-10 text-center text-lg font-medium">All packages come at a one-time setup fee of US$300</h1>
    </div>

    {{-- Testimonials  --}}
    <div class=" container mx-auto px-5" id="Testimonials">
        <div id="testimonials" class="text-center md:pt-10">
            <h1 class="font-bold font-benguiat text-[32px] banner pt-8">Testimonials</h1>
        </div>
        <div class="mt-10 grid md:grid-cols-2 grid-cols-1 gap-x-16 gap-y-8 md:gap-y-3 md:py-10 pb-12">
            <livewire:layouts.testimonials-card
                para="Our HR processes have been transformed with this software. It's simplified everything from recruitment to payroll, and the analytics provide valuable insights for our decision-making. The support team has been phenomenal - always there to assist us when we need help. I can't imagine going back to our old system."
                avatar="/assets/icons/stevens.svg" name="Laura Stevens" posting="HR Manager at XYZ Corp" />

            <livewire:layouts.testimonials-card
                para="Our HR processes have been transformed with this software. It's simplified everything from recruitment to payroll, and the analytics provide valuable insights for our decision-making. The support team has been phenomenal - always there to assist us when we need help. I can't imagine going back to our old system."
                avatar="/assets/icons/stevens.svg" name="Laura Stevens" posting="HR Manager at XYZ Corp" />
        </div>

    </div>

    {{-- request demo  --}}
    <div>
        <livewire:home.request-demo />
    </div>

    {{-- faq  --}}
    <div>
        <livewire:home.faq id="FQA" />
    </div>

    {{-- footer  --}}
    <div>
        <livewire:home.footer />
    </div>



</div>
