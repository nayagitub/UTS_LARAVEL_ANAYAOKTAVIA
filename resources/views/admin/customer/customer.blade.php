<x-app-layout>
    <div class="container mt-5">

        <h1>Customers</h1>

        <a href="{{ route('customers.create') }}"
           class="btn btn-primary mb-3">
            Add Customer
        </a>

        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($customers as $customer)

                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->kode }}</td>
                    <td>{{ $customer->nama }}</td>
                    <td>{{ $customer->alamat }}</td>
                    <td>{{ $customer->telepon }}</td>
                    <td>{{ $customer->email }}</td>

                    <td>

                        <a href="{{ route('customers.edit', $customer->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('customers.destroy', $customer->id) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">
                                Delete
                            </button>

                        </form>

                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</x-app-layout>