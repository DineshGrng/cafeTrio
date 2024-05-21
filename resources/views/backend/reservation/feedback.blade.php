<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Costomer feedback</h1>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <tr class="bg-light">
                    {{-- {{ $feedback }} --}}
                    <th class="border border-1">Sn</th>
                    <th class="border border-1">name</th>
                    <th class="border border-1">email</th>
                    <th class="border border-1">phone</th>
                    <th class="border border-1">message</th>
                    <th class="border border-1">actions</th>
                </tr>
            @foreach ($feedback as $message)

                <tr>
                    <td class="border border-1">{{ $loop->iteration }}</td>
                    <td class="border border-1">{{ $message->name }}</td>
                    <td class="border border-1">{{ $message->email }}</td>
                    <td class="border border-1">{{ $message->phone }}</td>
                    <td class="border border-1">{{ $message->message }}</td>
                    <td class="border border-1">
                        <form action="{{ route('feedback.destroy', $message->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach

            </table>
        </div>
    </div>

    </section>
</x-app-layout>
