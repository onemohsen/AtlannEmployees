<?php //dd($users); ?>

<div>
    <!-- Header -->
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tigh">
            مشاهده کاربران
        </h2>
    </x-slot>
    <!-- ListUser -->
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-button.primary label="جدید" wire:click="create()"/>

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
                                            نام
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ایمیل
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            نقش
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                        </svg>
                                                    </div>
                                                    <div class="mr-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$user->name}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$user->email}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$user->is_admin ? 'مدیر' : 'کارمند'}}
                                            </td>
                                            <td class="flex px-6 py-4 whitespace-nowrap text-right text-sm font-medium ">
                                                <a wire:click="edit({{$user->id}})"
                                                   class="text-gray-400 hover:text-yellow-600 mr-2 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                </a>
                                                <a wire:click="delete({{$user->id}})"
                                                   class="text-gray-400 hover:text-red-600 mr-2 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </a>
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
    <!-- Modal -->
    <div>
        <form wire:submit.prevent="store" class="">
            <x-modal.dialog wire:model.defer="showModal" class="overflow-y-auto">
                <x-slot name="title">
                    {{$isEdit ? 'ویرایش کاربر' : 'ایجاد کاربر'}}
                </x-slot>
                <x-slot name="content">
                    <div class="h-screen-min">
                        <x-input.group for="name" label="نام" :error="$errors->first('user.name')"
                                       required="true">
                            <x-icon.user/>
                            <x-input.text
                                wire:model.defer="user.name"
                                id="name"
                                placeholder="نام"
                            />
                        </x-input.group>

                        <x-input.group for="email" label="ایمیل" :error="$errors->first('user.email')"
                                       required="true">
                            <x-icon.email/>
                            <x-input.text
                                wire:model.defer="user.email"
                                id="email"
                                type="email"
                                placeholder="info@atlan.com"
                            />
                        </x-input.group>

                        <x-input.group for="userRoles" label="نقش" :error="$errors->first('user.is_admin')"
                                       required="true">
                            <x-input.select wire:model.defer="user.is_admin" :options="$userRoles" optionName="name" id="userRoles"/>
                        </x-input.group>

                        @if(!$isEdit)
                            <x-input.group for="password" label="رمز عبور" :error="$errors->first('user.password')">
                                <x-input.password id="password" wire:model.defer="user.password"/>
                            </x-input.group>
                            <x-input.group for="passwordConfirm" label="تکرار رمز عبور" :error="$errors->first('user.password_confirmation')">
                                <x-input.password id="passwordConfirm" wire:model.defer="user.password_confirmation"/>
                            </x-input.group>
                        @endif

                        <div class="flex" wire:loading.delay>
                            Loading ...
                        </div>
                    </div>
                </x-slot>
                <x-slot name="footer">
                    <x-button.primary
                        label="ثبت"
                        type="submit"
                        wire:loading.attr="disabled"
                        class="text-center"
                    />
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>
</div>
