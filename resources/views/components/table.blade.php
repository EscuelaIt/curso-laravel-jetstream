<table class="table-fixed">
    <thead class="border-y border-gray-500 border-y-2">
        <tr>
            <th class="w-2/12">
                Title
            </th>
            <th class="w-3/12">
                Description
            </th>
            <th class="w-3/12">
                Preview
            </th>
            <th class="w-1/12">
                Created at
            </th>
          <th class="w-3/12"></th>
        </tr>
    </thead>
  <tbody>
    <tr>
        <td class="px-2">Malcolm Lockyer</td>
        <td class="px-2">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
        <td class="px-2"><img src="#" alt="Title"></td>
        <td class="px-2">5 hours ago</td>
        <td class="flex px-2 flex-row">
            <x-jet-button class="mr-2 bg-blue-300" x-bind:disabled="creating">
                Edit
            </x-jet-button>
            <x-jet-button class="mr-2 bg-red-300" x-on:click="window.helpers().showMessage(text)">
                Remove
            </x-jet-button>
        </td>
    </tr>
    <tr>
        <td class="px-2">Lorem ipsum, dolor sit amet, consectetur adipisicing.</td>
        <td class="px-2">Optio sed at similique fugiat in. Deserunt eveniet nostrum cupiditate expedita aliquam voluptate.</td>
        <td class="px-2"><img src="#" alt="Title"></td>
        <td class="px-2">10 hours ago</td>
        <td class="flex px-2 flex-row">
            <x-jet-button class="mr-2 bg-blue-300" x-bind:disabled="creating">
                Edit
            </x-jet-button>
            <x-jet-button class="mr-2 bg-red-300">
                Remove
            </x-jet-button>
        </td>
    </tr>
    <tr>
        <td class="px-2">Dolor sit amet, consectetur adipisicing.</td>
        <td class="px-2">Similique fugiat in. Deserunt eveniet nostrum cupiditate expedita aliquam voluptate.</td>
        <td class="px-2"><img src="#" alt="Title"></td>
        <td class="px-2">12 hours ago</td>
        <td class="flex px-2 flex-row">
            <x-jet-button class="mr-2 bg-blue-300" x-bind:disabled="creating">
                Edit
            </x-jet-button>
            <x-jet-button class="mr-2 bg-red-300">
                Remove
            </x-jet-button>
        </td>
    </tr>
  </tbody>
</table>
