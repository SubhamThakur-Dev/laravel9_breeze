<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Edit #') }}{{$post->id}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sidebar">
            @include('layouts.adminSidebar')            
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('posts.update',$post)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="text" name="title" value="{{ $post->title }}" placeholder="Post Title">
                        <br/><br/>
                        <textarea name="description" value="{{ $post->description }}" placeholder="Post Description">{{ $post->description }}</textarea>
                        <br/><br/>                           
                        <select name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @selected($category->id == $post->category_id)>{{ $category->category }}</option>
                            @endforeach
                        </select>
                        <br/><br/>
                        @if(!empty($post->image))
                        <label class="block mb-4">
                                <span class="sr-only">Post Image</span>
                                <img class="product-img" style="width: 200px;height: 150px;" src="<?= URL::to('/'); ?>/images/posts/{{ $post->image }}" alt="..." />
                            </label>
                            <br/><br/> 
                            <label class="block mb-4">
                                <span class="sr-only">Choose Post Image</span>
                                <input type="file" name="image" value="{{ $post->image }}" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                                @error('image')
                                <p class="error" style="color: red;">{{ $message }}</p>
                                @enderror
                            </label>
                            <br/><br/>  
                        @endif                      
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
