<div>
    <style>
        #Timeoff {
            scroll-margin-top: 110px;
        }

        #Performance {
            scroll-margin-top: 110px;
        }

        #Reporting {
            scroll-margin-top: 110px;
        }

        #Onboarding {
            scroll-margin-top: 110px;
        }

        #Learning {
            scroll-margin-top: 110px;
        }

        #Timesheet {
            scroll-margin-top: 110px;
        }

        #Payroll {
            scroll-margin-top: 110px;
        }

        #Recruitment {
            scroll-margin-top: 110px;
        }
    </style>
    {{-- header section  --}}
    <header>
        <livewire:layouts.header />
    </header>

    {{-- employee management section  --}}
    <section class=" container mx-auto px-5 lg:mt-[125px] mt-[100px] py-[60px]">
        <div>
            <img src="/assets/icons/employee-management.svg" alt="" class=" w-12 h-12 mx-auto">
        </div>
        <h1 class=" text-2xl text-center font-bold py-5">Employee Management</h1>
        <p class=" text-center">Essential for maintaining accurate records and facilitating HR processes, including
            statuses, types, genders, marital statuses, payment intervals, methods, and relations.</p>
        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-5">
            @include('livewire.features-elaboration.managements', [
                ($heading = 'My Info'),
                ($paragraph =
                    'Displays user-specific personal and professional details like name, address, job title, and background.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Employees'),
                ($paragraph =
                    'Presents detailed information of all employees, with options to edit and manage their data.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Org Chart'),
                ($paragraph =
                    "Visual representation of the company's internal structure, showing roles, responsibilities, and reporting relationships."),
            ])
        </div>
    </section>

    {{-- time off management section  --}}
    <section class=" bg-[#F9F5E4]" id="Timeoff">
        <div class=" container mx-auto px-5 py-[60px]">
            <div>
                <img src="/assets/icons/time-off-management.svg" alt="" class=" w-12 h-12 mx-auto">
            </div>
            <h1 class=" text-2xl text-center font-bold py-5">Time Off Management</h1>
            <p class=" text-center">Flexible leave options for employees, including paid time off and sick leave, for
                better work-life balance.</p>
            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-5">
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'My Time Off'),
                    ($paragraph =
                        'Employees can request leaves; higher roles can apply for others, with efficient leave tracking.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'My Company Time Off'),
                    ($paragraph = " View all employees' time off for easy monitoring."),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Pending Request'),
                    ($paragraph =
                        'Employees see their leave requests awaiting approval; managers and HR review, with HR having final say.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Unexcused Absences Calculation'),
                    ($paragraph = ' Track and calculate unexcused absences linked to employee timesheets.'),
                ])
            </div>
        </div>
    </section>

    {{-- performance management section  --}}
    <section class=" container mx-auto px-5 py-[60px]" id="Performance">
        <div>
            <img src="/assets/icons/performance-management.svg" alt="" class=" w-12 h-12 mx-auto">
        </div>
        <h1 class=" text-2xl text-center font-bold py-5">Performance Management</h1>
        <p class=" text-center">Tracks and evaluates employee performance, identifying strengths and weaknesses for
            individual and organizational improvement.</p>
        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-5">
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Performance Goals'),
                ($paragraph =
                    'Allows setting and tracking of goals, with progress monitoring and feedback provision.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'My Goals'),
                ($paragraph = 'Employees view and update their progress on assigned objectives.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Performance Review'),
                ($paragraph =
                    'Facilitates comprehensive evaluations, allowing goal assignors to rate and provide feedback based on individual performance.'),
            ])
        </div>
    </section>

    {{-- reporting section  --}}
    <section class=" bg-[#F9F5E4]" id="Reporting">
        <div class=" container mx-auto px-5 py-[60px]">
            <div>
                <img src="/assets/icons/hr-analysis.svg" alt="" class=" w-12 h-12 mx-auto">
            </div>
            <h1 class=" text-2xl text-center font-bold py-5">Reporting/HR Analytics</h1>
            <p class=" text-center">Provides HR professionals and employees with efficient access to information and
                task completion, streamlining processes and data retrieval for enhanced productivity.</p>
            <div class=" grid grid-cols-1 md:grid-cols-2 gap-5 pt-5">
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Files'),
                    ($paragraph =
                        'Enables HR to manage and access documents easily, promoting organization, data integrity, and efficient record-keeping.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Assets'),
                    ($paragraph =
                        'Assists in effective asset management, tracking resource distribution and allocation within the organization.'),
                ])
            </div>
        </div>
    </section>

    {{-- onboarding & offboarding section  --}}
    <section class=" container mx-auto px-5 py-[60px]" id="Onboarding">
        <div>
            <img src="/assets/icons/onboarding.svg" alt="" class=" w-12 h-12 mx-auto">
        </div>
        <h1 class=" text-2xl text-center font-bold py-5">Onboarding & Offboarding</h1>
        <p class=" text-center">Onboarding streamlines new employee integration with task lists, role-specific
            information, and progress tracking whereas offboarding manages exiting employee processes with customizable
            task lists and status updates specific to their roles.</p>
        <div class=" grid grid-cols-1 md:grid-cols-2 gap-5 pt-5">
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Onboarding'),
                ($paragraph =
                    'Displays onboarding details with editable titles, descriptions, and status, allowing creation and assignment of task lists for new and old employees tailored to their roles.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Offboarding'),
                ($paragraph =
                    'Lists offboarding information with editable titles, descriptions, and status, facilitating the creation and assignment of task lists for employees leaving, customized to their specific roles.'),
            ])
        </div>
    </section>

    {{-- learning management system section --}}
    <section class=" bg-[#F9F5E4]" id="Learning">
        <div class=" container mx-auto px-5 py-[60px]">
            <div>
                <img src="/assets/icons/learning.svg" alt="" class=" w-12 h-12 mx-auto">
            </div>
            <h1 class=" text-2xl text-center font-bold py-5">Learning Management System</h1>
            <p class=" text-center">A platform for organizing and managing learning resources, offering access to
                training materials and courses, and tracking course completions and assessments.</p>
            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-5">
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Courses'),
                    ($paragraph =
                        'Enables employees to create courses with videos, images, and quizzes, and assign them to others, offering certifications for successful completion.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Enrollment'),
                    ($paragraph = 'Displays assigned courses for employee enrollment.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'My Learning'),
                    ($paragraph =
                        "Shows employee's course progress, including video playback from last stop, and provides quizzes and certifications upon course completion."),
                ])
            </div>
        </div>
    </section>

    {{-- timesheet management section --}}
    <section class=" container mx-auto px-5 py-[60px]" id="Timesheet">
        <div>
            <img src="/assets/icons/timesheet.svg" alt="" class=" w-12 h-12 mx-auto">
        </div>
        <h1 class=" text-2xl text-center font-bold py-5">Timesheet Management</h1>
        <p class=" text-center">Streamlines project management and time tracking, allowing creation and assignment of
            projects in one place.</p>
        <div class=" grid grid-cols-1 md:grid-cols-2 gap-5 pt-5">
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Project'),
                ($paragraph = 'Enables adding new projects with key details like name, team, and dates.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Timesheet Review'),
                ($paragraph = 'Shows detailed view of each project for easy monitoring.'),
            ])
        </div>
    </section>

    {{-- payroll management section --}}
    <section class=" bg-[#F9F5E4]" id="Payroll">
        <div class=" container mx-auto px-5 py-[60px]">
            <div>
                <img src="/assets/icons/payroll.svg" alt="" class=" w-12 h-12 mx-auto">
            </div>
            <h1 class=" text-2xl text-center font-bold py-5">Payroll Management</h1>
            <p class=" text-center">Streamlines payroll management with comprehensive tools for tax slabs, allowances,
                deductions, overtime, social security, and policy assignment, ensuring accurate and compliant payroll
                processing.</p>
            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-5">
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Tax Slab'),
                    ($paragraph =
                        'Manages tax calculations with flexible tax slab settings for different countries.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Allowance & Deduction'),
                    ($paragraph =
                        'Allows adding allowance and deduction details like name, frequency, and applicability.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Overtime'),
                    ($paragraph =
                        'Calculates overtime rates based on working hours, with automated pay rate adjustments.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Social Security'),
                    ($paragraph =
                        'Defines social security contributions with options for employee and employer contributions.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Payroll Policy'),
                    ($paragraph = 'Assigns tailored payroll policies to employees based on specific criteria.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Payslip'),
                    ($paragraph =
                        'Offers payslip creation with a new template, enabling customization with variables and company details.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Medical Refund'),
                    ($paragraph =
                        'Process and reimburse medical expenses with options for taxable and non-taxable refunds.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Loan'),
                    ($paragraph =
                        "Facilitate and manage loan deductions directly from employees' salaries after taxes."),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Exceptional Recognition'),
                    ($paragraph =
                        'Acknowledge outstanding performance with bonuses or salary increments integrated into payroll.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Staff Advances'),
                    ($paragraph =
                        'Provide and manage salary and travel advances with automatic deductions from future pay checks.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Retroactive Payments'),
                    ($paragraph =
                        'Manage employee status with options for full-time, blue-collar, and white-collar workers.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Union Dues'),
                    ($paragraph =
                        'Deduct union dues automatically for eligible employees as part of the payroll policy.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'Seniority Bonus'),
                    ($paragraph =
                        'Reward long-term employees with a 10-year seniority bonus added directly to their payroll.'),
                ])
                @include('livewire.features-elaboration.managements', [
                    ($heading = 'GL Files'),
                    ($paragraph =
                        'Generate and manage General Ledger files for comprehensive financial reporting and balance generation.'),
                ])
            </div>
        </div>
    </section>

    {{-- recruitment management section  --}}
    <section class=" container mx-auto px-5 py-[60px]" id="Recruitment">
        <div>
            <img src="/assets/icons/recruitment.svg" alt="" class=" w-12 h-12 mx-auto">
        </div>
        <h1 class=" text-2xl text-center font-bold py-5">Recruitment Management</h1>
        <p class=" text-center">Simplified application process with regular updates.</p>
        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-5">
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Job Openings'),
                ($paragraph = 'HR creates and posts new jobs after supervisor and admin approvals.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Candidates'),
                ($paragraph = 'Easy management of candidate details, communication, and document uploads.'),
            ])
            @include('livewire.features-elaboration.managements', [
                ($heading = 'Reports'),
                ($paragraph = ' Overview of hiring status, offers, and candidate reports for specific positions'),
            ])
        </div>
    </section>

    {{-- footer section  --}}
    <div>
        <livewire:home.footer />
    </div>
</div>
