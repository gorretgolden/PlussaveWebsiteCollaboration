<div class=" bg-white rounded-lg overflow-hidden shadow-lg   ">
    <div class="py-4  px-10">

        <form>
            <h2 class="text-lg font-bold mb-3">Contact Form</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input wire:model='name'
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Your Name">

                    <!--validation-->
                @error('name')
                    <span class=" text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input wire:model='email'
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"

                 id="email" type="email" placeholder="Your Email">

                  <!--validation-->
                  @error('email')
                  <span class=" text-red-500">{{ $message }}</span>
              @enderror

                </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                <textarea wire:model='message'
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" placeholder="Your Message" rows="4"></textarea>
                     <!--validation-->
                     @error('message')
                     <span class=" text-red-500">{{ $message }}</span>
                 @enderror
            </div>
            <div>
                <span wire:loading.delay.long class=" text-green-600 py-4">Sending message...</span>


            </div>
            <div class="flex items-center justify-between">

                <button wire:click.prevent='sendContactMessage'
                    class="bg-green-700  w-40  hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
