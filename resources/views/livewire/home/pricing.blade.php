<div class=" mt-10 md:mt-24" id="price">
    <h1 class="font-bold  text-center font-benguiat text-[32px] banner">Pricing</h1>
    <p class="mt-10 font-normal text-center"> We believe in providing a comprehensive solution without hidden
        costs, that's why our pricing is simple and transparent. Our platform is available at a one-time
        purchase cost, providing you lifelong access to our innovative HR and payroll management solution. </p>
        <div class=" ">
            <div class="lg:flex gap-x-10 sm:flex sm:justify-center lg:justify-between w-full overflow-y-auto xl:pl-0 lg:pl-0 md:pl-[650px] sm:pl-[620px] ">
                <livewire:layouts.pricing-card  plans="STANDARD PLAN" img="/assets/icons/standard.svg" price="$200" content="Ideal for small-sized businesses looking to streamline their HR operations" employee="5-55"/>
                <livewire:layouts.pricing-card  plans="PREMIUM PLAN" img="/assets/icons/premium.svg" price="$350" content="Perfect for growing businesses that need a more robust HR Solution" employee="56-106"/>
                <livewire:layouts.pricing-card  plans="GOLD PLAN" img="/assets/icons/ultimate.svg" price="$600" content="Designed for medium-sized organizations those in need of in-depth in-sights and data-driven decision-making" employee="107-500"/>
                <livewire:layouts.pricing-card  plans="PLATINUM PLAN" img="/assets/icons/ultimate.svg" price="$800" content="Unleash enterprise excellence with our all-inclusive HRM solution, tailored for large-scale organizations." employee="600-800"/>
                {{-- <livewire:layouts.pricing-card  plans="GOLD PLAN" img="/assets/icons/ultimate.svg" /> --}}
            </div>
        </div>


</div>
