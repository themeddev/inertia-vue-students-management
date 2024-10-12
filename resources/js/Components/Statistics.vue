<script setup>
    let data = [
        { type: 'Students', count: 2680 },
        { type: 'Teachers', count: 150 },
        { type: 'Classes', count: 120 }
    ];
</script>


<template>
    <div class="w-full flex flex-col md:flex-row gap-2 justify-center items-center py-10 px-2">
        <div 
            class="w-full md:w-fit min-w-[200px] rounded-[25px] bg-white p-8 aspect hover:shadow-md duration-500 hover:-translate-y-1"
            v-for="(item, index) in data"
            :key="index"
        >
            <div class="h-12">
                <svg class="h-full fill-white stroke-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
            </div>
            <div class="my-2">
                <h2 class="text-4xl font-bold"><span>{{ item.count }}</span> +</h2>
            </div>
    
            <div>
                <p class="mt-2 font-sans text-base font-medium text-gray-500">{{ item.type }}</p>
            </div>
        </div>
    </div>
</template>
