<title>ТК Атлант</title>
<x-app-layout>
    

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> -->
                
            </div>
            <a class="a1" href="{{ url('/order') }}"><button class="btn">Оформить заказ</button></a>
        </div>
        
    </div>
</x-app-layout>
 
<style>
.py-12{
     background-image: url("img/main.jpg");

            background-repeat: no-repeat;

            background-position: center;

            background-size: cover;

            height: 91vh;

}

.btn {
   position: relative;
left: 50%;
transform: translate(-50%);
bottom: -70vh;
    text-align: center;
    width: 300px;
    height: 50px;
    border-radius: 50px;

    font-size: 18px;
    cursor: pointer;
    animation: glowing 1300ms infinite;
    font-weight: bold;
}
@keyframes glowing {
    0% {background-color: #D4E5FF;box-shadow: 0 0 5px #D4E5FF;}
    50% {background-color: #9FC4F8;box-shadow: 0 0 40px #9FC4F8;}
    100% {background-color: #78A4E5;box-shadow: 0 0 5px #78A4E5;}
}


</style>