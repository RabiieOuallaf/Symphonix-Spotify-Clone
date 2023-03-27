<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Symphonix</title>
        <!-- Tailwind -->
        @vite(['resources/css/app.css'])
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased  overflow-hidden overflow-y-auto bg-neutral-800" >
        
        <section class="homepage w-[100%] h-[800px] overflow-y-auto">
            
            <div class="flex flex-col">

                <x-navbar class="flex-1"/> 
                    @if($results )

                    @foreach($results as $result)
                        {{$result->song_name}}
                    @endforeach
                    

                    @endif
                    
                    <x-Sidebar class="flex-1"/>
                

            </div>
            
            
        </section>
        
        

    </body>
</html>
