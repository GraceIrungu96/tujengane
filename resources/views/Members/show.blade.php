<x-app-layout>

<div class="grid grid-cols-5  grid-row-5 p-5" style="height: 37rem">
  <div class="border-4 rounded-xl bg-slate-200 border-blue-400 hover:border-lime-300 col-span-1 row-span-5 mr-3">
      

      <form action="/cocktail" method="POST" enctype="multipart/form-data" class="p-2">
          @csrf

          <!--NAme -->
          <div>
              <x-input-label for="Idname" :value="__('Full Id Name')" />

              <x-text-input id="Idname" class="block mt-1 w-full" type="name" name="Idname" placeholder="Example: joseph kim" value="{{ old('Idname') }}" required autofocus />

              <x-input-error :messages="$errors->get('Idname')" class="mt-2" />
          </div>
          <!--Next Of Kin -->
          <div>
              <x-input-label for="Kinname" :value="__('Next Of Kin')" />

              <x-text-input id="Kinname" class="block mt-1 w-full" type="name" name="Kinname" placeholder="Example: joseph kim" value="{{ old('Idname') }}" required autofocus />

              <x-input-error :messages="$errors->get('Kinname')" class="mt-2" />
          </div>
          <!--Position -->
          <div>
              <x-input-label for="position" :value="__('position')" />

              <x-text-input id="position" class="block mt-1 w-full" type="name" name="position" placeholder="Example: secretary" value="{{ old('position') }}" required autofocus />

              <x-input-error :messages="$errors->get('position')" class="mt-2" />
          </div>
          <!--ID NUMBER -->
          <div>
              <x-input-label for="Number" :value="__('Full Id Number')" />

              <x-text-input id="Idnumber" class="block mt-1 w-full" type="number" name="Idnumber" placeholder="Example: 86480364" value="{{ old('Idnumber') }}" required autofocus />

              <x-input-error :messages="$errors->get('Idnumber')" class="mt-2" />
          </div>
          <!--Phone NUMBER -->
          <div>
              <x-input-label for="Number" :value="__('Phone Number')" />

              <x-text-input id="Phonenumber" class="block mt-1 w-full" type="number" name="Phonenumber" placeholder="Example: 0786480364" value="{{ old('phonenumber') }}" required autofocus />

              <x-input-error :messages="$errors->get('Phonenumber')" class="mt-2" />
          </div>

          <!-- Logo -->
          <div class="mt-4">
              <x-input-label for="logo" value="Logo" />

              <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" required />

              <x-input-error :messages="$errors->get('logo')" class="mt-2" />
          </div>

          <!-- ingredient -->
          <div class="mt-4">
              <x-input-label for="ingredients" :value="__('ingredients')" />

              <x-text-input id="ingredients" class="block mt-1 w-full"
                              type="text"
                              name="ingredients"
                              placeholder="ingredients (Comma Separated)"
                              required  />

              <x-input-error :messages="$errors->get('ingredients')" class="mt-2" />
          </div>

          

          <div class="flex items-center justify-center mt-4">


              <x-primary-button class="ml-4 bg-teal-500">
                  {{ __('Create Profile') }}
              </x-primary-button>
          </div>
      </form>

      </div>
      <div class="border-4 rounded-xl bg-slate-200 border-blue-400 hover:border-lime-300 col-span-2 row-span-2 mr-3">
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6 rounded-l-lg">
                            Expenditure
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date
                        </th>
                        <th scope="col" class="py-3 px-6 rounded-r-lg">
                            Amount
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            1
                        </td>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="py-4 px-6">
                            1
                        </td>
                        <td class="py-4 px-6">
                            $1999
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="py-4 px-6">
                           1
                        </td>
                        <td class="py-4 px-6">
                            $99
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900 dark:text-white">
                        <th scope="row" class="py-3 px-6 text-base">Total</th>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6">21,000</td>
                   </tr>
                </tfoot>
            </table>
        </div>
        </div>
      <div class="border-4 rounded-xl bg-slate-200 border-blue-400 hover:border-lime-300 col-span-2 row-span-2 mr-3">kihara</div>
      
      <div class="border-4 rounded-xl bg-slate-200 border-blue-400 hover:border-lime-300 col-span-4 row-span-3 mr-3 mt-2">
        
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="py-3 px-6">
                  Mpesa code
              </th>
              <th scope="col" class="py-3 px-6">
                  Date
              </th>
              <th scope="col" class="py-3 px-6">
                  Phone Number
              </th>
              <th scope="col" class="py-3 px-6">
                  Amount
              </th>
              
          </tr>
      </thead>
      <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Apple MacBook Pro 17"
              </th>
              <td class="py-4 px-6">
                  Sliver
              </td>
              <td class="py-4 px-6">
                  Laptop
              </td>
              <td class="py-4 px-6">
                  $2999
              </td>
              
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Microsoft Surface Pro
              </th>
              <td class="py-4 px-6">
                  White
              </td>
              <td class="py-4 px-6">
                  Laptop PC
              </td>
              <td class="py-4 px-6">
                  $1999
              </td>
              
          </tr>
          <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Magic Mouse 2
              </th>
              <td class="py-4 px-6">
                  Black
              </td>
              <td class="py-4 px-6">
                  Accessories
              </td>
              <td class="py-4 px-6">
                  $99
              </td>
             
          </tr>
      </tbody>
  </table>
</div>

      </div>


  </div>
</x-app-layout>