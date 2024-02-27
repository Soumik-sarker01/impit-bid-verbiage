<!DOCTYPE html>
<html>

<head>
    <title>Bid Verbiage Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .select2-container .select2-selection--single .select2-selection__arrow {
            height: 100%;
        }

        .select2-container--default .select2-selection--single {
            box-sizing: border-box;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            display: none;
        }

    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Bid Verbiage Generator</h1>

        <div class="row mt-5">
            <div class="col-md-4">
                <label for="client-code" class="form-label">Client Code:</label>
                <input type="number" class="form-control" id="client-code">
            </div>
            <div class="col-md-4">
                <label for="wo-number" class="form-label">W/O Number:</label>
                <input type="text" class="form-control" id="wo-number">
            </div>
            <div class="col-md-4">
                <label for="property-address" class="form-label">Property Address:</label>
                <input type="text" class="form-control" id="property-address">
            </div>
        </div>

        <div id="product-details" class="mt-5">
            <h2>Bid Details</h2>
            <table class="table table-bordered product-table">
                <thead>
                    <tr>
                        <th>Scope of Work</th>
                        <th>Qty</th>
                        <th>Unit</th>
                        <th>Cost per Unit ($)</th>
                        <th>Total Cost ($)</th>
                        <th>Location</th>
                        <th>Reason</th>
                        <th>Disclaimer</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="product-rows">
                    <tr>
                        <td>
                            <select class="form-select action-perform"></select>
                        </td>
                        <td><input type="number" class="form-control quantity" oninput="updateTotalCost(this)"></td>
                        <td>
                            <select class="form-select unit" onchange="updateTotalCost(this)">
                                <option value="LF">Linear Feet</option>
                                <option value="EA">Each</option>
                                <option value="CYD">Cubic Yard</option>
                                <option value="CYF">Cubic Feet</option>
                                <option value="Square Feet">Square Feet</option>
                                <option value="IN">Inch</option>
                                <option value="HR">Hour</option>
                            </select>
                        </td>
                        <td><input type="number" class="form-control cost-per-unit" oninput="updateTotalCost(this)">
                        </td>
                        <td class="total-cost">0.00</td>
                        <td><input type="text" class="form-control location"></td>
                        <td><input type="text" class="form-control reason" onclick="openReasonModal(this)"></td>
                        <td><input type="text" class="form-control disclaimer" onclick="openDisclaimerModal(this)"></td>
                        <td><button class="btn btn-danger" onclick="deleteRow(this)">Delete</button></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary" onclick="addProductRow()">Add Product</button>
        </div>

        <a href="bid-verbiage.blade.php" id="preview-link" class="btn btn-success mt-4" target="_blank"
            onclick="passDataToPreview()">Preview and Print</a>
    </div>

    <div class="modal" id="reasonModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reason</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeReasonModal()"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="reasonTextArea" rows="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="saveReasonText()">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="closeReasonModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="disclaimerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Disclaimer Text</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeDisclaimerModal()"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="disclaimerTextArea" rows="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="saveDisclaimerText()">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="closeDisclaimerModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        function addProductRow() {
            const tbody = document.getElementById('product-rows');
            const newRow = tbody.insertRow();
            newRow.innerHTML = `
                <td>
                    <select class="form-select action-perform"></select>
                </td>
                <td><input type="number" class="form-control quantity" oninput="updateTotalCost(this)"></td>
                <td>
                    <select class="form-select unit" onchange="updateTotalCost(this)">
                        <option value="LF">Linear Feet</option>
                        <option value="EA">Each</option>
                        <option value="CYD">Cubic Yard</option>
                        <option value="CYF">Cubic Feet</option>
                        <option value="Square Feet">Square Feet</option>
                        <option value="IN">Inch</option>
                        <option value="HR">Hour</option>
                    </select>
                </td>
                <td><input type="number" class="form-control cost-per-unit" oninput="updateTotalCost(this)"></td>
                <td class="total-cost">0.00</td>
                <td><input type="text" class="form-control location"></td>
                <td><input type="text" class="form-control reason" onclick="openReasonModal(this)"></td>
                <td><input type="text" class="form-control disclaimer" onclick="openDisclaimerModal(this)"></td>
                <td><button class="btn btn-danger" onclick="deleteRow(this)">Delete</button></td>
            `;

            // Initialize Select2 for the 'Scope of Work' in the newly added row
            const selectScopeOfWork = newRow.querySelector('.action-perform');
            initSelect2(selectScopeOfWork);
        }

        function deleteRow(element) {
            const row = element.closest('tr');
            row.remove();
        }

        function initSelect2(element) {
            $(element).select2({
                data: [{
                        id: '#',
                        text: 'Select Action'
                    },
                    {
                        id: 'Trim Shrubs',
                        text: 'Trim Shrubs'
                    },
                    {
                        id: 'Trim Small Tree',
                        text: 'Trim Small Tree'
                    },
                    {
                        id: 'Trim Medium Tree',
                        text: 'Trim Medium Tree'
                    },
                    {
                        id: 'Trim Large Tree',
                        text: 'Trim Large Tree'
                    },
                    {
                        id: 'Trim Extra Large Tree',
                        text: 'Trim Extra Large Tree'
                    },
                    {
                        id: 'Maid Refresh',
                        text: 'Maid Refresh'
                    },
                    {
                        id: 'Remove Saplings',
                        text: 'Remove Saplings'
                    },
                    {
                        id: 'Remove Exterior Debris',
                        text: 'Remove Exterior Debris'
                    },
                    {
                        id: 'Remove Interior Debris',
                        text: 'Remove Interior Debris'
                    },
                    {
                        id: 'Initial Grass Cut',
                        text: 'Initial Grass Cut'
                    },
                    {
                        id: 'Remove Tires',
                        text: 'Remove Tires'
                    },
                    {
                        id: 'Remove Mattress',
                        text: 'Remove Mattress'
                    },
                    {
                        id: 'Install Handrail',
                        text: 'Install Handrail'
                    },
                    {
                        id: 'Repair deck steps',
                        text: 'Repair deck steps'
                    },
                    {
                        id: 'Remove Fridge',
                        text: 'Remove Fridge'
                    },
                    {
                        id: 'Remove Bush and leaves from Deck',
                        text: 'Remove Bush and leaves from Deck'
                    },
                    {
                        id: 'Electrical Inspection',
                        text: 'Electrical Inspection'
                    },
                    {
                        id: 'Structural Inspection',
                        text: 'Structural Inspection'
                    },
                    {
                        id: 'Install lockset',
                        text: 'Install lockset'
                    },
                    {
                        id: 'Clean Toilet',
                        text: 'Clean Toilet'
                    },
                    {
                        id: 'Relocate Satellite dish',
                        text: 'Relocate Satellite dish'
                    },
                    {
                        id: 'Remove drywall',
                        text: 'Remove drywall'
                    },
                    {
                        id: 'Remove Insulation',
                        text: 'Remove Insulation'
                    },
                    {
                        id: 'Antimicrobial',
                        text: 'Antimicrobial'
                    },
                    {
                        id: 'Kilz',
                        text: 'Kilz'
                    },
                    {
                        id: 'Remove TV',
                        text: 'Remove TV'
                    },
                    {
                        id: 'Remove Cars',
                        text: 'Remove Cars'
                    }
                ],
                placeholder: 'Search for an action...',
                width: '100%'
            });
        }



        function openReasonModal(element) {
            const reasonModal = new bootstrap.Modal(document.getElementById('reasonModal'));
            reasonModal.show();

            const reasonText = element.value;
            document.getElementById('reasonTextArea').value = reasonText;

            // Store the row index of the clicked reason input
            const rowIndex = Array.from(document.querySelectorAll('.reason')).indexOf(element);
            document.getElementById('reasonTextArea').setAttribute('data-row-index', rowIndex);
        }

        function saveReasonText() {
            const reasonText = document.getElementById('reasonTextArea').value;
            const rowIndex = document.getElementById('reasonTextArea').getAttribute('data-row-index');
            const reasonInputs = document.querySelectorAll('.reason');

            reasonInputs[rowIndex].value = reasonText;

            const reasonModal = new bootstrap.Modal(document.getElementById('reasonModal'));
            reasonModal.hide();
            initializeModal('reasonModal', closeReasonModal);
        }

        function closeReasonModal() {
            let reasonModal = document.getElementById('reasonModal');
            let bootstrapModal = bootstrap.Modal.getInstance(reasonModal);
            if (bootstrapModal) {
                bootstrapModal.hide();
            }
        }

        function openDisclaimerModal(element) {
            const disclaimerModal = new bootstrap.Modal(document.getElementById('disclaimerModal'));
            disclaimerModal.show();

            const disclaimerText = element.value;
            document.getElementById('disclaimerTextArea').value = disclaimerText;

            // Store the row index of the clicked disclaimer input
            const rowIndex = Array.from(document.querySelectorAll('.disclaimer')).indexOf(element);
            document.getElementById('disclaimerTextArea').setAttribute('data-row-index', rowIndex);
        }

        function saveDisclaimerText() {
            const disclaimerText = document.getElementById('disclaimerTextArea').value;
            const rowIndex = document.getElementById('disclaimerTextArea').getAttribute('data-row-index');
            const disclaimerInputs = document.querySelectorAll('.disclaimer');

            disclaimerInputs[rowIndex].value = disclaimerText;

            const disclaimerModal = new bootstrap.Modal(document.getElementById('disclaimerModal'));
            disclaimerModal.hide();
            initializeModal('disclaimerModal', closeDisclaimerModal);
        }


        function closeDisclaimerModal() {
            let disclaimerModal = document.getElementById('disclaimerModal');
            let bootstrapModal = bootstrap.Modal.getInstance(disclaimerModal);
            if (bootstrapModal) {
                bootstrapModal.hide();
            }
        }

        function initializeModal(modalId, closeModalFunction) {
            let modalElement = document.getElementById(modalId);
            let modalInstance = new bootstrap.Modal(modalElement);
            modalElement.querySelector('.btn-close').addEventListener('click', closeModalFunction);
        }


        function updateTotalCost(element) {
            const row = element.closest('tr');
            const quantity = parseFloat(row.querySelector('.quantity').value) || 0;
            const costPerUnit = parseFloat(row.querySelector('.cost-per-unit').value) || 0;
            const totalCost = quantity * costPerUnit;
            row.querySelector('.total-cost').textContent = totalCost.toFixed(2);
        }

        function passDataToPreview() {
            const productRows = document.querySelectorAll('.product-table tbody tr');
            const productData = [];

            productRows.forEach(row => {
                const actionPerform = row.querySelector('.action-perform').value;
                const quantity = parseFloat(row.querySelector('.quantity').value);
                const unit = row.querySelector('.unit').value;
                const costPerUnit = parseFloat(row.querySelector('.cost-per-unit').value);
                const totalCost = quantity * costPerUnit;
                const location = row.querySelector('.location').value;
                const reason = row.querySelector('.reason').value;
                const disclaimer = row.querySelector('.disclaimer').value;

                if (actionPerform && !isNaN(quantity) && unit && !isNaN(costPerUnit) && location) {
                    productData.push({
                        actionPerform,
                        quantity,
                        unit,
                        costPerUnit,
                        totalCost,
                        location,
                        reason,
                        disclaimer,
                    });
                }
            });

            const data = encodeURIComponent(JSON.stringify(productData));
            const propertyAddress = document.getElementById("property-address").value;
            const workOrderNumber = document.getElementById("wo-number").value;
            const clientCode = document.getElementById("client-code").value;
            const previewLink = document.getElementById("preview-link");
            previewLink.href =
                `/preview?data=${data}&property-address=${propertyAddress}&wo-number=${workOrderNumber}&clientCode=${clientCode}`;
        }

        // Add this part to initialize Select2 for the first row
        document.addEventListener('DOMContentLoaded', function () {
            const firstRowSelect = document.querySelector('.action-perform');
            initSelect2(firstRowSelect);
        });

    </script>
</body>

</html>
