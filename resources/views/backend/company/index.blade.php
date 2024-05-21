<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Company Detail's</h1>
            </div>
            @if (empty($company))
                <div>
                    <a href="{{ route('company.create') }}" class="btn btn-sm btn-primary">create new</a>
                </div>
            @endif


        </div>
        <div class="card-body">
            <table class="table">
                <tr class="bg-light">
                    {{-- {{ $companies }} --}}
                    <th class="border border-1">Sn</th>
                    <th class="border border-1">logo</th>
                    <th class="border border-1">name</th>
                    <th class="border border-1">email</th>
                    <th class="border border-1">phone</th>
                    <th class="border border-1">actions</th>
                </tr>

                @if (!empty($company))
                    <tr>
                        <td class="border border-1">1</td>
                        <td class="border border-1">
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $company->id }}">
                                <img src="{{ asset($company->logo) }}" height="45" alt="">
                            </a>
                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $company->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $company->name }}
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset($company->logo) }}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="border border-1">{{ $company->name }}</td>
                        <td class="border border-1">{{ $company->email }}</td>
                        <td class="border border-1">{{ $company->phone1 }}</td>
                        <td class="border border-1">
                            <form action="{{ route('company.destroy', $company->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('company.edit', $company->id) }}"
                                    class="btn btn-sm btn-primary">edit</a>
                                <a href="{{ route('company.show', $company->id) }}"
                                    class="btn btn-sm btn-info">show</a>
                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                            </form>
                        </td>

                    </tr>
                @endif

            </table>
        </div>
    </div>
</x-app-layout>
