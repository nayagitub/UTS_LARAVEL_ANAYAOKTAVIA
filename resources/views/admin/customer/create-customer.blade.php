<x-app-layout>
    <div class="container mt-5">

        <h1>Create Customer</h1>

        <form action="{{ route('customers.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>Kode</label>
                <input type="text" name="kode" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <button type="submit"
                    class="btn btn-primary">
                Create Customer
            </button>

        </form>

    </div>
</x-app-layout>