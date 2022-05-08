<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="mt-4"></div>
    <div class="container mx-auto">
        <form action="">
            <div class="flex gap-1">
                <div class="w-2/3">
                    <div class="bg-white p-2 rounded">
                        <div class="fom-inner-section">
                            <div class="form-control w-full">
                                <label class="label" for="title">
                                    <span class="label-text">{{ __('Post Title') }}</span>
                                </label>
                                <input type="text" id="title" name="title"
                                       class="input input-bordered input-primary input-md w-full"/>
                                <label>
                                    <input type="text" class="input input-bordered input-xs w-full mt-1" disabled/>
                                </label>
                            </div>
                            <div class="form-control w-full mt-3">
                                <x-forms.tinymce-editor/>
                            </div>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <div class="bg-white p-2 rounded">
                        <!-- collapse -->
                        <div tabindex="0" class="collapse collapse-open collapse-arrow border border-base-300 bg-base-100 rounded-box">
                            <div class="collapse-title text-xl font-medium">
                                Status and visibility
                            </div>
                            <div class="collapse-content">
                                {{--                                <div class="form-control">--}}
                                {{--                                    <label class="label cursor-pointer">--}}
                                {{--                                        <span class="label-text">{{ __('Visibility') }}</span>--}}
                                {{--                                        <input type="checkbox" class="toggle toggle-primary" />--}}
                                {{--                                    </label>--}}
                                {{--                                </div>--}}
                                <div class="flex justify-between items-center">
                                    <div class="">
                                        <span class="label-text">{{ __('Visibility') }}</span>
                                    </div>
                                    <div class="flex">
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <input type="radio" name="post_status" value="draft" class="radio radio-sm text-red-500 hover:text-red-500 checked:bg-red-500" />
                                                <span class="label-text ml-1">Draft</span>
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <input type="radio" name="post_status" value="publish" class="radio radio-sm checked:bg-blue-500" />
                                                <span class="label-text ml-1">Publish</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- collapse-content -->
                        </div>
                        <!-- / END collapse -->
                        <div class="mt-6 text-right">
                            <button class="btn btn-sm btn-primary text-sm leading-5 rounded-md font-semibold text-white">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
