<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center">
    <!-- Tailwindcss V3 Script because here v3 is not supported -->
<script src="https://cdn.tailwindcss.com/"></script>
<div class="flex justify-center items-center w-full mt-10 min-h-screen">
  <div>
    <div class="flex justify-between">
      <div class="mb-4">
        <span class="text-white rounded-md font-semibold cursor-pointer p-2">Write</span>
        <span class=" font-semibold text-[#7E8490] cursor-pointer p-2">Preview</span>
      </div>
      <div class="flex gap-3 text-[#9CA3AF]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
        </svg>
      </div>
    </div>
    <div>
        
    </div>
    <form action="/addComment" method="POST">
        @csrf
        <input type="text" class="hidden" name="comment_creator" value="{{ auth()->user()->email }}">
        <textarea placeholder="Add your comment..." name="comment" class="p-2 focus:outline-1 focus:outline-purple-500 font-bold border-[0.1px] resize-none h-[120px] border-[#9EA5B1] rounded-md w-[60vw]"></textarea>
        <div class="flex justify-end">
          <button class="text-sm font-semibold absolute bg-purple-500 w-fit text-white py-2 rounded px-3">Post</button>
        </div>
    </form>
  </div>
</div>
</body>
</html>
