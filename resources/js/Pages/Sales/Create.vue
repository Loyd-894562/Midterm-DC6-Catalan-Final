<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import { inject } from 'vue';

    const props  = defineProps({
        sales : Object
    })

    const themeMode = inject('themeMode')
</script>

<template>
    <Head title="Create Sales" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl  leading-tight">Create Sales</h2>
        </template>

        <div :class="themeMode" class="min-h-screen  py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10  mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <h2 class="leading-relaxed mt-3 font-semibold text-xl self-start ">Create a Sales</h2>

                </div>
                <hr class="h-px  border-0 dark:bg-gray-700">
                <div class="divide-y  divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-2  sm:text-lg sm:leading-7">
                    <div class="flex flex-col">
                        <label class="leading-loose">Date</label>
                        <input type="date" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose">Client</label>
                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" >
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col">
                            <label class="leading-loose">Mode of Payment</label>
                            <div class="relative focus-within:text-gray-600 ">
                                <select id="product_id" name="product_id"  class="pr-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                    <option value="" disabled>Select Product</option>
                                    <option>Cash</option>
                                    <option>Credit</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Product</label>
                            <div class="relative focus-within:text-gray-600 ">
                                <select id="product_id" name="product_id"  class="pr-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                    <option value="" disabled>Select Product</option>
                                    <option>Smartphones</option>
                                    <option>Groceries</option>
                                    <option>Fragrances</option>
                                    <option>Home Decoration</option>
                                    <option>Skin Care</option>
                                    <option>Laptops</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex flex-col">
                            <label class="leading-loose">Qty</label>
                            <input type="number" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                        </div>

                    </div>
                    <div class="flex flex-col">
                        <div class="flex flex-col">
                            <label class="leading-loose">Amount</label>
                            <input type="number" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                        </div>

                    </div>
                    </div>
                    <div class="pt-4 flex items-center space-x-4">
                        <button class=" bg-red-600 flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                        </button>
                        <button class="bg-green-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

    </AuthenticatedLayout>

</template>
