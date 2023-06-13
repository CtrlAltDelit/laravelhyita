<title>Товары</title>
<x-app-layout>
    
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Товары') }}
        </h2>
    </x-slot>
    
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 
			<div id="wrapper_admin">
					<div id="articles_admin">
						<article>
							<img src="image/d1.jpg">
							<label style="font-size:25px; font-weight: bold;">Диван 1</label>
							<br><label style="font-size:18px; font-weight: bold;">25000 рублей</label></br>
							<label>ШxГxВ: 222x89x89</label>
							<label>Механизм трансформации: Книжка</label>
							<label>Материал обивки: Шенилл</label>
							<label>Материал ножек: Дерево</label>
						</article>

						<article>
							<img src="image/d1.jpg">
							<label style="font-size:25px; font-weight: bold;">Диван 1</label>
							<br><label style="font-size:18px; font-weight: bold;">25000 рублей</label></br>
							<label>ШxГxВ: 222x89x89</label>
							<label>Механизм трансформации: Книжка</label>
							<label>Материал обивки: Шенилл</label>
							<label>Материал ножек: Дерево</label>
						</article>

						<article>
							<img src="image/d1.jpg">
							<label style="font-size:25px; font-weight: bold;">Диван 1</label>
							<br><label style="font-size:18px; font-weight: bold;">25000 рублей</label></br>
							<label>ШxГxВ: 222x89x89</label>
							<label>Механизм трансформации: Книжка</label>
							<label>Материал обивки: Шенилл</label>
							<label>Материал ножек: Дерево</label>
						</article>

						<article>
							<img src="image/d1.jpg">
							<label style="font-size:25px; font-weight: bold;">Диван 1</label>
							<br><label style="font-size:18px; font-weight: bold;">25000 рублей</label></br>
							<label>ШxГxВ: 222x89x89</label>
							<label>Механизм трансформации: Книжка</label>
							<label>Материал обивки: Шенилл</label>
							<label>Материал ножек: Дерево</label>
						</article>

						<article>
							<img src="image/d1.jpg">
							<label style="font-size:25px; font-weight: bold;">Диван 1</label>
							<br><label style="font-size:18px; font-weight: bold;">25000 рублей</label></br>
							<label>ШxГxВ: 222x89x89</label>
							<label>Механизм трансформации: Книжка</label>
							<label>Материал обивки: Шенилл</label>
							<label>Материал ножек: Дерево</label>
						</article>

						<article>
							<img src="image/d1.jpg">
							<label style="font-size:25px; font-weight: bold;">Диван 1</label>
							<br><label style="font-size:18px; font-weight: bold;">25000 рублей</label></br>
							<label>ШxГxВ: 222x89x89</label>
							<label>Механизм трансформации: Книжка</label>
							<label>Материал обивки: Шенилл</label>
							<label>Материал ножек: Дерево</label>
						</article>
				</div>
			</div>
                
            </div>
           
        </div>
    </div>

    
</x-app-layout>

<style>
#wrapper_admin #articles_admin {
	float: left;
	width: 100%;
	margin-bottom: 1%;
	margin-top: 2%;
	text-align: center;
}

#wrapper_admin #articles_admin article {
	float: left;
	width: 30%;
	box-sizing: border-box;
	border-radius: 5px;
	border: 2px solid silver; 
	background-color: #fff;
	margin-right: 1%;
	transition: 1s;
	padding: 1%;
	margin-bottom: 3%;
	text-align: center;
	height: 400px;
	margin-left: 2%;
} 
</style>