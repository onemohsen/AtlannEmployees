<div>
    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">لیست کارها</h1>
                <div class="flex mt-4">
                    <x-button.primary label="جدید" wire:click="create()"/>
                </div>
            </div>
            <div>
                @forelse($tasks as $task)
                    <div class="my-5 p-3 hover:bg-gray-50">
                        <div class="flex mb-1 items-center justify-between">
                            <h2 class="font-bold">{{$task->name}}</h2>
                            <div class="flex">
                                <a wire:click="edit({{$task->id}})"
                                   class="text-gray-400 hover:text-yellow-600 mr-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </a>
                                <a wire:click="delete({{$task->id}})"
                                   class="text-gray-400 hover:text-red-600 mr-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <p class="w-full text-grey-darkest opacity-50">{{$task->note}}</p>
                        </div>
                    </div>
                @empty
                    <div class="my-5 p-3 hover:bg-gray-50">
                        <div>
                            <p class="w-full text-grey-darkest opacity-50">
                                کار انجام شده ای امروز وجود ندارد !
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <div>
        <form wire:submit.prevent="store" class="">
            <x-modal.dialog wire:model.defer="showModal" class="overflow-y-auto">
                <x-slot name="title">
                    {{$isEdit ? 'ویرایش کار' : 'ایجاد کار'}}
                </x-slot>
                <x-slot name="content">
                    <div class="h-screen-min">
                        <x-input.group for="name" label="نام" :error="$errors->first('task.name')"
                                       required="true">
                            <x-icon.user/>
                            <x-input.text
                                wire:model.defer="task.name"
                                id="name"
                                placeholder="نام"
                            />
                        </x-input.group>

                        <x-input.group for="note" label="یادداشت" :error="$errors->first('task.note')">
                            <x-input.text-area
                                wire:model.defer="task.note"
                                id="note"
                                placeholder="یادداشت"
                            />
                        </x-input.group>
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
