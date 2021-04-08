<?php //dd($users); ?>

<div>
    <!-- Header -->
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tigh">
            گزارش کار کاربران
        </h2>
    </x-slot>
    <!-- ListUser -->
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex space-x-3">
                    <div></div>
                    <div class="flex">
                        <x-input.group for="startDate" label="تاریخ شروع" :error="$errors->first('startDate')">
                            <input type="date" id="startDate" wire:model.defer="startDate">
                        </x-input.group>
                        <x-input.group for="endDate" label="تاریخ پایان" :error="$errors->first('endDate')">
                            <input type="date" id="endDate" wire:model.defer="endDate">
                        </x-input.group>
                    </div>
                    <div>
                        <x-button.primary label="فیلتر" wire:click="filterDate()"  class="mt-7"/>
                    </div>
                </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            نام وظیفه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            یادداشت
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            کاربر
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            تاریخ
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            زمان ایجاد
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($tasks as $task)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="mr-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$task->name}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$task->note}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$task->user->name}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$task->date}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$task->created_at}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap " colspan="3">
                                                کاربری یافت نشد !!!
                                            </td>
                                        </tr>
                                    @endforelse

                                    <!-- More items... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
