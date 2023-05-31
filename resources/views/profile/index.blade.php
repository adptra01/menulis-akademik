<x-layout>
    <x-slot name="title">Profile User</x-slot>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong><i class="bx bx-error bx-flashing"></i>
                Failed</strong> {{ $errors }}.
        </div>
    @elseif (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong><i class="bx bxs-bell bx-tada"></i> Success!</strong> {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="https://source.unsplash.com/random/?course&1
                " alt="Banner image"
                        width="100%" height="200px" style="object-fit: cover" class="rounded-top">
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="https://api.dicebear.com/6.x/notionists/svg?seed=Felix{{ rand() }}"
                            alt="user image" width="150px"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4 class="fw-bold">{{ $user->name }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item fw-semibold">
                                        <i class="bx bx-pen"></i>
                                        {{ $user->isAdmin == 1 ? 'Admin' : 'User' }}
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class="bx bx-calendar-alt"></i>
                                        {{ Carbon\carbon::parse($user->created_at)->format('D, d M Y') }}
                                    </li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5">
            <!-- About User -->
            <div class="card mb-4">
                <div class="card-body">
                    <small class="text-muted text-uppercase">Profile User</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span
                                class="fw-semibold mx-2">Full Name:</span> <span>{{ $user->name }}</span></li>
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span
                                class="fw-semibold mx-2">Status:</span> <span>Active</span></li>
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span
                                class="fw-semibold mx-2">Role:</span>
                            <span>{{ $user->isAdmin == 1 ? 'Admin' : 'User' }}</span>
                        </li>
                        <li class="d-flex align-items-center"><i class="bx bx-envelope"></i><span
                                class="fw-semibold mx-2">Email:</span> <span>{{ $user->email }}</span></li>
                    </ul>
                </div>
            </div>
            <!--/ About User -->
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
            <!-- Activity Timeline -->
            <div class="card card-action mb-4">
                <div class="card-header align-items-center">
                    <small class="text-muted text-uppercase">Password</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.password') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">New Password</label>
                            <input name="new_password" type="password"
                                class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="New Password">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control"
                                id="confirmNewPasswordInput" placeholder="Confirm New Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>
            </div>
            <!--/ Activity Timeline -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ Route('update.detail') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                aria-describedby="helpId" value="{{ $user->name }}">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" class="form-control" name="email" id="email"
                                aria-describedby="helpId" value="{{ $user->email }}">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
