<div>

    <style>

        *{
            scroll-padding-top: 80px;
        }
    </style>
    {{-- header --}}
    <livewire:layouts.header />

    <div class="container mx-auto px-5 mt-48" >

        {{-- section one  start --}}
        <div>
            <livewire:landing-card.featurse-content title="Employee Management"
            para="Essential for maintaining accurate records and facilitating HR processes, including statuses, types, genders, marital statuses, payment intervals, methods, and relations." image="/assets/images/employee-management.png" />

        </div>
        
        <div class="grid md:grid-cols-3 grid-cols-1 gap-y-4 mt-10 gap-x-8">
            <livewire:landing-card.featurse-cards title="My Info"
                description="Displays user-specific personal and professional details like name, address, job title, and background." />
            <livewire:landing-card.featurse-cards title="Employees"
                description="Presents detailed information of all employees, with options to edit and manage their data." />
            <livewire:landing-card.featurse-cards title="Org Chart"
                description="Visual representation of the company's internal structure, showing roles, responsibilities, and reporting relationships." />
        </div>


    </div>
    {{-- section one end --}}


    {{-- section two start --}}

    
    {{-- section two end --}}


    {{-- section four start --}}
    <div class="bg-[#F9F5E4] py-20 mt-16" id="Timeoff">
        <div class=" container mx-auto px-5">
            <div>
                <livewire:landing-card.featurse-content title="Time Off Management"
                para="Flexible leave options for employees, including paid time off and sick leave, for better work-life balance." image="/assets/images/timeoff.png"  />
            </div>
           
    
            <div class="grid md:grid-cols-3 grid-cols-1 gap-y-4 gap-x-12 mt-10">
                <livewire:landing-card.featurse-cards title="My Time Off"
                    description="Employees can request leaves; higher roles can apply for others, with efficient leave tracking." />
                <livewire:landing-card.featurse-cards title="My Company Time Off"
                    description="View all employees' time off for easy monitoring." />
                <livewire:landing-card.featurse-cards title="Pending Request"
                    description="Employees see their leave requests awaiting approval; managers and HR review, with HR having final say." />
            </div>
    
    
        </div>
    </div>
    
    {{-- section four end --}}


    {{-- section 5 start --}}
    
        <div class="container mx-auto px-5 mt-16" id="Performance">
            <div class="">
                <livewire:landing-card.featurse-content title="Performance Management"
                    para="Tracks and evaluates employee performance, identifying strengths and weaknesses for individual and organizational improvement." image="/assets/images/performance.png" />
            </div>

            <div class="grid md:grid-cols-3 grid-cols-1 gap-y-4 gap-x-12 mt-10">
                <livewire:landing-card.featurse-cards title="Performance Goals"
                    description="Allows setting and tracking of goals, with progress monitoring and feedback provision." />
                <livewire:landing-card.featurse-cards title="my Goals"
                    description="Employees view and update their progress on assigned objectives." />
                <livewire:landing-card.featurse-cards title="Performance Review"
                    description="Facilitates comprehensive evaluations, allowing goal assignors to rate and provide feedback based on individual performance." />
            </div>

        </div>
    

    {{-- section 5 end --}}
    

    {{-- section 6 start --}}

    {{-- section 6 end --}}

    {{-- section 7 start --}}
    <div class="bg-[#F9F5E4] py-20 mt-16" id="Reporting/HR Analytics">
        <div class="container mx-auto px-5">
            <div class="">
                <livewire:landing-card.featurse-content title="Reporting/HR Analytics"
                    para="Provides HR professionals and employees with efficient access to information and task completion, streamlining processes and data retrieval for enhanced productivity." image="/assets/images/reporting.png" />
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-y-4 gap-x-12 mt-10">
                <livewire:landing-card.featurse-cards title="Files"
                    description="Enables HR to manage and access documents easily, promoting organization, data integrity, and efficient record-keeping." />
                <livewire:landing-card.featurse-cards title="Assets"
                    description="Assists in effective asset management, tracking resource distribution and allocation within the organization." />

            </div>

        </div>
    </div>
    {{-- section 7 end --}}
    {{-- section 8 start --}}


    <div class="container mx-auto px-5 mt-16" id="Onboarding & Offboarding">
        <div class="">
            <livewire:landing-card.featurse-content title="Onboarding & Offboarding"
                para="Onboarding streamlines new employee integration with task lists, role-specific information, and progress tracking whereas offboarding manages exiting employee processes with customizable task lists and status updates specific to their roles." image="/assets/images/onboarding.png" />
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-y-4  gap-x-12 mt-10">
            <livewire:landing-card.featurse-cards title="Onboarding"
                description="Displays onboarding details with editable titles, descriptions, and status, allowing creation and assignment of task lists for new and old employees tailored to their roles." />
            <livewire:landing-card.featurse-cards title="Offboarding"
                description="Lists offboarding information with editable titles, descriptions, and status, facilitating the creation and assignment of task lists for employees leaving, customized to their specific roles." />

        </div>

    </div>
    {{-- section 8 end --}}

{{-- section 9 start --}}

<div class="bg-[#F9F5E4] py-20 mt-16" id="Learning">

    <div class="container mx-auto px-5">

        <div class="">
            <livewire:landing-card.featurse-content title="Learning Management System"
                para="A platform for organizing and managing learning resources, offering access to training materials and courses, and tracking course completions and assessments." image="/assets/images/learing-system.png" />

        </div>

        <div class="grid md:grid-cols-3 grid-cols-1 gap-y-4 gap-x-12 mt-10">
            <livewire:landing-card.featurse-cards title="Courses"
                description="Enables employees to create courses with videos, images, and quizzes, and assign them to others, offering certifications for successful completion." />
            <livewire:landing-card.featurse-cards title="Enrollment"
                description="Displays assigned courses for employee enrollment." />
            <livewire:landing-card.featurse-cards title="My Learning"
                description="Shows employee's course progress, including video playback from last stop, and provides quizzes and certifications upon course completion." />
        </div>

    </div>
</div>
{{-- section 9 end --}}

{{-- section 10 start --}}
<div class="container mx-auto px-5 mt-16" id="Timesheet">
    <div class="">
        <livewire:landing-card.featurse-content title="Timesheet Management"
            para="Streamlines project management and time tracking, allowing creation and assignment of projects in one place." image="/assets/images/timesheet.png" />
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-y-4 gap-x-12 mt-10">
        <livewire:landing-card.featurse-cards title="Project"
            description="Enables adding new projects with key details like name, team, and dates." />
        <livewire:landing-card.featurse-cards title="Timesheet Review"
            description="Shows detailed view of each project for easy monitoring." />

    </div>

</div>
{{-- section 10 end --}}

{{-- section 11 start --}}

<div class="bg-[#F9F5E4] py-20 mt-16" id="Payroll">
    <div class="container mx-auto px-5">
        <div class="">
            <livewire:landing-card.featurse-content title="Payroll Management"
                para="Streamlines payroll management with comprehensive tools for tax slabs, allowances, deductions, overtime, social security, and policy assignment, ensuring accurate and compliant payroll processing." image="/assets/images/payroll.png"/>

        </div>

        <div class="grid md:grid-cols-3 grid-cols-1 gap-x-12 gap-y-8 mt-10">
            <livewire:landing-card.featurse-cards title="Tax Slab"
                description="Manages tax calculations with flexible tax slab settings for different countries." />
            <livewire:landing-card.featurse-cards title="Allowance & Deduction"
                description="Allows adding allowance and deduction details like name, frequency, and applicability." />
            <livewire:landing-card.featurse-cards title="Overtime"
                description="Calculates overtime rates based on working hours, with automated pay rate adjustments." />
                <livewire:landing-card.featurse-cards title="Social Security"
                description="Defines social security contributions with options for employee and employer contributions." />
                <livewire:landing-card.featurse-cards title="Payroll Policy"
                description="Assigns tailored payroll policies to employees based on specific criteria." />
                <livewire:landing-card.featurse-cards title="Payslip"
                description="Offers payslip creation with a new template, enabling customization with variables and company details." />
        </div>

    </div>
</div>
{{-- section 11 end --}}

{{-- section 12 start --}}
<div class="container mx-auto px-5 mt-16" id="">
    <div class="">
        <livewire:landing-card.featurse-content title="Recruitment Management"
            para="Simplified application process with regular updates." image="/assets/images/recruitment.png" />
    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 gap-y-4 gap-x-12 mt-10 pb-12">
        <livewire:landing-card.featurse-cards title="Job Openings"
            description="HR creates and posts new jobs after supervisor and admin approvals." />
        <livewire:landing-card.featurse-cards title="Candidates"
            description="Easy management of candidate details, communication, and document uploads." />
            <livewire:landing-card.featurse-cards title="Reports"
            description="Overview of hiring status, offers, and candidate reports for specific positions" link="Recruitment" />

    </div>

</div>

{{-- section 12 end --}}


</div>

