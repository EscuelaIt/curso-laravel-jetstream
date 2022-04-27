<div>
    <h1 class="text-2xl"> {{ $counter }} </h1>
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
            </tr>
        </thead>
      <tbody>
        @foreach ($files as $file)
            <tr>
                <td class="px-2">{{ $file->title }}</td>
                <td class="px-2">{{ $file->description }}</td>
                <td class="px-2 rounded-md">
                    <div class="rounded-md">
                        <img
                            class="m-2 rounded-md"
                            src="{{ $file->url }}" alt="{{ $file->title }}"
                        >

                    </div>
                </td>
                <td class="px-2">{{ $file->created_at_for_humans }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
