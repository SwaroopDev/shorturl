<x-app-layout>
    <x-slot name="header">
        @include('common.common-header')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                
                            <div>
                                <div>Enter link below : </div>
                                <div class="relative mb-3" data-te-input-wrapper-init>
                                    <textarea id='big_link'
                                        class="peer block min-h-[auto] w-full rounded border-1 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-10 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleFormControlTextarea1"
                                        rows="3"
                                        placeholder="Your Link"
                                        name='big_link'></textarea>
                                    <!-- <label
                                        for="exampleFormControlTextarea1"
                                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                        Your Link
                                    </label> -->
                                </div>
                            </div><br>

                            <div>
                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input
                                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] disabled:opacity-60 dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                        type="radio"
                                        name="status"
                                        id="flexRadioDisabled"
                                        value=1
                                        checked
                                        />
                                    <label
                                        class="mt-px inline-block pl-[0.15rem] opacity-50 hover:pointer-events-none"
                                        for="flexRadioDisabled">
                                        Active 
                                    </label>
                                    </div><br>
                                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                    <input
                                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] disabled:opacity-60 dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                        type="radio"
                                        name="status"
                                        id="flexRadioCheckedDisabled"
                                        value=0
                                        />
                                    <label
                                        class="mt-px inline-block pl-[0.15rem] opacity-50 hover:pointer-events-none"
                                        for="flexRadioCheckedDisabled">
                                        Inactive
                                    </label>
                                </div>
                            </div><br>

                            <div id="slink">
                            </div><br>
                            
                            <div class="flex items-center justify-end mt-4">
                                
                                <x-primary-button class="ml-4 postbutton">
                                    Create
                                </x-primary-button>
                            </div>
                        <!-- </form> -->
                
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $(".postbutton").click(function(event){
                event.preventDefault();
                $("#slink").empty();
                if(isValidURL($("#big_link").val()) === false){
                    alert('Please enter valid url');
                    return false;
                }

                $.ajax({
                    url: '/shortlink/create',
                    type: 'POST',
                    data: {_token: CSRF_TOKEN, big_link:$("#big_link").val(),active:$("input[name='status']:checked").val()},
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.status == 'success'){
                            var showmsg = '<div style="background-color:cyan">Your Short Link is : <span>'+data.msg+'<span></div>';
                        } else {
                            var showmsg = '<div style="background-color:red">Your Short Link is : <span>'+data.msg+'<span></div>';    
                        }
                        $("#slink").append(showmsg);
                    },
                    error: function(response) {
                        var showmsg = '<div style="background-color:red"><span>'+'Something went wrong.'+'<span></div>';
                        $("#slink").append(showmsg);
                        
                    }
                }); 
            });


            var elm;    
            function isValidURL(u){
                if(u!==""){  
                    if(!elm){
                    elm = document.createElement('input');
                    elm.setAttribute('type', 'url');
                    }
                elm.value = u;
                return elm.validity.valid;
                }
                else{
                    return false
                }
            }
       });    
    </script>


</x-app-layout>
