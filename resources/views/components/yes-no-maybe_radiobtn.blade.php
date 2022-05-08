{{-- https://dev.to/thomasvanholder/click-label-to-choose-radio-button-tailwindcsss-peer-class-39nb --}}
<ul class="grid grid-cols-3 gap-x-5 m-10 max-w-md mx-auto">
    <li class="relative">
        <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
        <label class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_yes">Yes</label>

        <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
            👍
        </div>

    <li class="relative">
        <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
        <label class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_no">No</label>

        <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
            👎
        </div>
    </li>

    <li class="relative">
        <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
        <label class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-yellow-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybe">Maybe</label>

        <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
            🤔
        </div>
    </li>
</ul>
