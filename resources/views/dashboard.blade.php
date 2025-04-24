<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <!-- <form action="{{ route('form-data') }}" method="post">
                    @csrf
                    <textarea name="editor1" id="contactText1"></textarea>
                    <br>
                    <br>
                    <button class="btn" type="submit">Submit</button>
                </form> -->


                <!-- Your Form -->
                <form action="{{ route('form-data') }}" method="POST" onsubmit="syncEditorContent()">

                    @csrf
                    <div class="mb-3">
                        <!-- Quill editor container -->
                        <div id="quill-editor" style="height: 200px;"></div>

                        <!-- Hidden textarea to store HTML content -->
                        <textarea name="content" id="content" style="display: none;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>