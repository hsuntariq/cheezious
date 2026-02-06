<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php' ?>
    <style>
    :root {
        --yellow-main: #FFC107;
        --yellow-soft: #FFF8E1;
        --yellow-dark: #FFB300;
    }

    .bg-yellow-soft {
        background-color: var(--yellow-soft);
    }

    .text-yellow {
        color: var(--yellow-main);
    }

    .btn-yellow {
        background-color: var(--yellow-main);
        border-color: var(--yellow-main);
        color: #000;
    }

    .btn-yellow:hover {
        background-color: var(--yellow-dark);
        border-color: var(--yellow-dark);
        color: #000;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--yellow-main);
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
    }

    .form-check-input:checked {
        background-color: var(--yellow-main);
        border-color: var(--yellow-main);
    }
    </style>

</head>

<body>
    <div class="row ">
        <?php include './admin-sidebar.php' ?>
        <div class="col-xl-10 col-lg-9 col-md-8 min-vh-100 bg-gray">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="card border-0 shadow-lg rounded-4">
                            <div class="card-header bg-yellow-soft border-0 px-4 py-4 rounded-top-4">
                                <h4 class="mb-0 fw-semibold">
                                    <i class="bi bi-tags me-2 text-yellow"></i>
                                    Add Category
                                </h4>
                                <p class="text-muted small mt-1 mb-0">
                                    Organize your restaurant menu beautifully
                                </p>
                            </div>

                            <div class="card-body px-4 py-4 bg-white">
                                <form action="./add-category.php" enctype="multipart/form-data" method="POST"
                                    class="row g-4">

                                    <!-- Category Name -->
                                    <div class="col-md-12">
                                        <label class="form-label fw-medium">Category Name</label>
                                        <input type="text" name="name" class="form-control form-control-lg"
                                            placeholder="e.g. Appetizers">
                                    </div>

                                    <!-- Parent Category -->
                                    <!-- <div class="col-md-6">
                                        <label class="form-label fw-medium">Parent Category</label>
                                        <select class="form-select form-select-lg">
                                            <option selected>None</option>
                                            <option>Drinks</option>
                                            <option>Main Course</option>
                                        </select>
                                    </div> -->

                                    <!-- Category Image -->
                                    <div class="col-md-12">
                                        <label class="form-label fw-medium">Category Image</label>
                                        <input type="file" name="image" class="form-control form-control-lg">
                                    </div>

                                    <!-- Display Order -->
                                    <!-- <div class="col-md-6">
                                        <label class="form-label fw-medium">Display Order</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="1">
                                    </div> -->

                                    <!-- Description -->
                                    <div class="col-12">
                                        <label class="form-label fw-medium">Description</label>
                                        <textarea name="desc" class="form-control" rows="4"
                                            placeholder="Short description for this category"></textarea>
                                    </div>

                                    <!-- Availability -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">Availability</label>
                                        <select name="availability" class="form-select form-select-lg">
                                            <option selected>All Day</option>
                                            <option value="breakfast">Breakfast</option>
                                            <option value="lunch">Lunch</option>
                                            <option value="dinner">Dinner</option>
                                        </select>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">Status</label>
                                        <select name="status" class="form-select form-select-lg">
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <!-- Featured -->
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input name="featured" value="off" class="form-check-input" type="checkbox"
                                                id="featured">
                                            <label class="form-check-label fw-medium" for="featured">
                                                Featured Category
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="col-12 d-flex justify-content-end gap-3 pt-3">
                                        <button type="reset" class="btn btn-light px-4">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-yellow px-4 fw-semibold">
                                            <i class="bi bi-check-circle me-1"></i>
                                            Save Category
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>