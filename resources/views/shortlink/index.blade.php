<x-app-layout>
    <x-slot name="header">
        @include('common.common-header')
    </x-slot>

        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Available Links are : {{($user->membership->available_links == -1 ) ? 'Unlimited' : $user->membership->available_links}}</h3>
                </div><hr>
                <div class="p-6 ">
                    
                <table id="records" class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-center font-bold">
                            <td class="border px-6 py-4">Short Link</td>
                            <td class="border px-6 py-4">Link</td>
                            <td class="border px-6 py-4">Status</td>
                            <td class="border px-6 py-4">Action</td>
                        </tr>
                    </thead>
                        @foreach($user->shortlinks as $shortlink)
                        <tr id="row-{{$shortlink->id}}">
                            
                            <td class="border px-6 py-4"><a style="color: blue;" target="_blank" href="{{url('url/'.substr($shortlink->shortlink,14,6))}}"> {{$shortlink->shortlink}}</a></td>
                            <td class="border px-6 py-4">{{(strlen($shortlink->link) > 70) ? substr($shortlink->link,0,70)."....." : $shortlink->link }}</td>
                            <td class="border px-6 py-4">{{($shortlink->active == 1)  ? 'Active':'Inactive' }}</td>
                            <td class="border px-6 py-4">
                            <a style="color: blue;" href="{{ url('shortlink/edit/'.$shortlink->id) }}"><u>Edit</u></a>&nbsp;&nbsp;
                            <a class="delete_link"  delete_id="{{$shortlink->id}}" style="color: red;" href="{{ url('shortlink/delete/'.$shortlink->id) }}"><u>Delete</u></a>   
                            </td>
                            
                        </tr>
                        @endforeach
                    
                </table>

                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $(".delete_link").click(function(event){
                event.preventDefault();

                $text = "Press ok to delete or you can cancel.";
                    if (confirm($text) == true) {
                        
                        $.ajax({
                        url: '/shortlink/delete',
                        type: 'POST',
                        data: {_token: CSRF_TOKEN, id:$(this).attr("delete_id")},
                        dataType: 'JSON',
                        success: function (data) {
                            console.log('#row-'+data.deleted_id);
                            $('#row-'+data.deleted_id).remove();
                        },
                        error: function(response) {
                            alert('Something went wrong please try again later');
                        }
                    });

                } else {
                    //delete cancel
                }
                 
            });
       });    
    </script>


</x-app-layout>
