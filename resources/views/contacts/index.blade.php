<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sidebar">
            @include('layouts.adminSidebar')            
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('contacts.create') }}" style="background: #1f2937;color: #fff;text-decoration: none;padding: 5px 36px 5px 36px;border-radius: 4px;text-transform: uppercase;">Add New Contact</a><br/><br/> 
                    @if(Session::has('create'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('create') }}</p>
                    @endif
                    @if(Session::has('update'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('update') }}</p>
                    @endif
                    @if(Session::has('delete'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('delete') }}</p>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $totalContacts = count($contacts); ?>
                            @if($totalContacts != '0')
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td> {{ $contact->name }} </td>
                                        <td> {{ $contact->email }} </td>
                                        <td> {{ $contact->message }} </td>
                                        <td>
                                            <a href="{{ route('contacts.edit',$contact) }}" style="background: #1f2937;color: #fff;text-decoration: none;padding: 5px 39px 3px 30px;border-radius: 4px;text-transform: uppercase;font-size: 14px;">Edit</a>
                                            <form method="post" action="{{ route('contacts.destroy',$contact) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                                            </form>
                                        <td>
                                    </tr>   
                                @endforeach   
                            @else
                                <tr class="Norecord">
                                    <td><b> No Contacts Found! </b></td>
                                </tr>    
                            @endif                                
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
