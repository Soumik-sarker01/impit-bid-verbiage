<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Items</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bid-gen.css') }}">

    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
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

            <h2>Selected Items</h2>
            <div class="table-responsive">
                <table class="table table-bordered product-table text-center">
                    <thead>
                        <tr>
                            <th class="wider-col">Scope of Work</th>
                            <th class="action-col">Action</th>
                            <th class="narrow-col">Quantity</th>
                            <th class="unit-col">Unit</th>
                            <th class="narrow-col">Cost/Unit($)</th>
                            <th class="narrow-col">Total($)</th>
                            <th class="wider-col">Location</th>
                            <th class="wider-col">Reason</th>
                            <th class="wider-col">Disclaimer</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="selectedItemsContainer">
                        <!-- Rows will be dynamically added here -->
                    </tbody>
                </table>
            </div>
            <a href="javascript:void(0);" id="preview-link" class="btn btn-success mt-4"
                onclick="passDataToPreview()">Preview and Print</a>
        </div>
        <div class="modal" id="locationModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Location</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            onclick="closeLocationModal()"></button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="locationTextArea" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="saveLocationText()">Save</button>
                    </div>
                </div>
            </div>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="disclaimerModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Disclaimer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            onclick="closeDisclaimerModal()"></button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="disclaimerTextArea" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="saveDisclaimerText()">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const params = new URLSearchParams(window.location.search);
                const selectedItems = JSON.parse(decodeURIComponent(params.get('selectedItems')));
                const container = document.getElementById('selectedItemsContainer');


                function addNewRow(afterRow) {
                    const tableBody = afterRow.parentNode;
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                    <td class="narrow-col scope-of-work"><i class="fas fa-grip-vertical"></i><input type="text" class="form-control" /></td>
                    <td class="narrow-col">
                    <select class="form-control action">
                        <option value=""></option>
                        <option value="Remove">Remove</option>
                                <option value="Remove & Replace">Remove & replace</option>
                                <option value="Install Padlock & Hasp">Install Padlock & Hasp</option>
                                <option value="Cut & Bag">Cut & Bag</option>
                                <option value="Rake & Remove">Rake & Remove</option>
                                <option value="Trim">Trim</option>
                                <option value="Install">Install</option>
                                <option value="Replace">Replace</option>
                                <option value="Install Lockset">Install Lockset</option>
                                <option value="Install Lockbox">Install Lockbox</option>
                                <option value="Clean">Clean</option>
                                <option value="Cut">Cut</option>
                                <option value="Repair">Repair</option>
                                <option value="Paint">Paint</option>
                                <option value="Board">Board</option>
                                <option value="Remove Drywall">Remove Drywall</option>
                                <option value="Remove Insulation">Remove Insulation</option>
                                <option value="Apply Antimicrobial">Apply Antimicrobial</option>
                                <option value="Apply Kilz">Apply Kilz</option>
                                <option value="Pump-out">Pump-out</option>
                                <option value="Mop">Mop</option>
                                <option value="Perform">Perform</option>
                    </select>
                    </td>
                    <td class="narrow-col"><input type="number" class="form-control quantity" oninput="calculateTotalCost(this)" /></td>
                    <td class="narrow-col">
                    <select class="form-control unit">
                        <option value=""></option>
                        <option value="LF">LF</option>
                        <option value="EA">EA</option>
                        <option value="CYD">CYD</option>
                        <option value="CYF">CYF</option>
                        <option value="SQFT">SQFT</option>
                        <option value="UI">UI</option>
                        <option value="HR">HR</option>
                    </select>
                    </td>
                    <td class="narrow-col"><input type="number" class="form-control cost-per-unit" oninput="calculateTotalCost(this)"></td>
                    <td class="total-cost narrow-col">0.00</td>
                    <td class="narrow-col"><input type="text" class="form-control location" onclick="openLocationModal(this)"></td>
                        <td class="narrow-col"><input type="text" class="form-control reason" onclick="openReasonModal(this)"></td>
                        <td class="narrow-col"><input type="text" class="form-control disclaimer" onclick="openDisclaimerModal(this)"></td>
                    <td class="delete-col"><button class="btn btn-danger delete-button" onclick="deleteRow(this)"><i class="fas fa-times"></i></button></td>
                    `;

                    // Add the new row after the current row
                    tableBody.insertBefore(newRow, afterRow.nextSibling);

                    // Add the plus button to the new row
                    addPlusButton(newRow);

                    // Set up delete handler for the new row
                    addRowDeleteHandler(newRow);

                    // Initialize drag and drop for the new row
                    initializeRowDragDrop(newRow);
                    // Initialize Select2 on the new action dropdown
                    $(newRow).find('.action').select2();
                }

                Object.entries(selectedItems).forEach(([category, items]) => {
                    items.forEach(item => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                        <td class="narrow-col scope-of-work"><i class="fas fa-grip-vertical"></i><input type="text" class="form-control scope-of-work-input" value="${item}"></td>
                        <td class="narrow-col">
                            <select class="form-control action">
                                <option value=""></option>
                                <option value="Remove">Remove</option>
                                <option value="Remove & Replace">Remove & replace</option>
                                <option value="Install Padlock & Hasp">Install Padlock & Hasp</option>
                                <option value="Cut & Bag">Cut & Bag</option>
                                <option value="Rake & Remove">Rake & Remove</option>
                                <option value="Trim">Trim</option>
                                <option value="Install">Install</option>
                                <option value="Replace">Replace</option>
                                <option value="Install Lockset">Install Lockset</option>
                                <option value="Install Lockbox">Install Lockbox</option>
                                <option value="Clean">Clean</option>
                                <option value="Cut">Cut</option>
                                <option value="Repair">Repair</option>
                                <option value="Paint">Paint</option>
                                <option value="Board">Board</option>
                                <option value="Remove Drywall">Remove Drywall</option>
                                <option value="Remove Insulation">Remove Insulation</option>
                                <option value="Apply Antimicrobial">Apply Antimicrobial</option>
                                <option value="Apply Kilz">Apply Kilz</option>
                                <option value="Pump-out">Pump-out</option>
                                <option value="Mop">Mop</option>
                                <option value="Perform">Perform</option>
                            </select>
                        </td>
                        <td class="narrow-col"><input type="number" class="form-control quantity"></td>
                        <td class="narrow-col">
                            <select class="form-control unit">
                                <option value=""></option>
                                <option value="LF">LF</option>
                                <option value="EA">EA</option>
                                <option value="CYD">CYD</option>
                                <option value="CYF">CYF</option>
                                <option value="SQFT">SQFT</option>
                                <option value="UI">UI</option>
                                <option value="HR">HR</option>
                            </select>
                        </td>
                        <td class="narrow-col"><input type="number" class="form-control cost-per-unit" oninput="calculateTotalCost(this)"></td>
                        <td class="total-cost narrow-col">0.00</td>
                        <td class="narrow-col"><input type="text" class="form-control location" onclick="openLocationModal(this)"></td>
                        <td class="narrow-col"><input type="text" class="form-control reason" onclick="openReasonModal(this)"></td>
                        <td class="narrow-col"><input type="text" class="form-control disclaimer" onclick="openDisclaimerModal(this)"></td>
                        <td class="delete-col"><button class="btn btn-danger delete-button" onclick="deleteRow(this)"><i class="fas fa-times"></i></button></td>
                        <td class="icon-col">
            <span class="plus-placeholder"></span> <!-- Placeholder -->
            <i class="fas fa-plus add-row" onclick="addNewRow(this.parentNode.parentNode)"></i> <!-- Plus Icon -->
        </td>
                    `;

                        container.appendChild(row);
                    });
                });
                let draggedRow = null;

                const initializeDragDrop = () => {
                    const rows = document.querySelectorAll('#selectedItemsContainer tr');
                    rows.forEach(row => {
                        row.setAttribute('draggable', true);
                        row.addEventListener('dragstart', handleDragStart);
                        row.addEventListener('dragover', handleDragOver);
                        row.addEventListener('dragenter', handleDragEnter);
                        row.addEventListener('dragleave', handleDragLeave);
                        row.addEventListener('drop', handleDrop);
                    });
                };

                function handleDragStart(e) {
                    draggedRow = e.target;
                    e.dataTransfer.effectAllowed = 'move';
                    e.target.classList.add('dragging');
                }

                function handleDragOver(e) {
                    e.preventDefault();
                    e.dataTransfer.dropEffect = 'move';

                    const targetRow = e.target.closest('tr');
                    if (!targetRow || targetRow === draggedRow) return;

                    // Reset styles for all rows first
                    document.querySelectorAll('#selectedItemsContainer tr').forEach(row => {
                        row.classList.remove('drag-over');
                    });

                    // Highlight the potential drop location
                    targetRow.classList.add('drag-over');
                }

                function handleDragEnter(e) {
                    e.preventDefault();
                    // The 'drag-over' class is applied in handleDragOver
                }

                function handleDragLeave(e) {
                    // Remove highlight when leaving a row
                    e.target.closest('tr').classList.remove('drag-over');
                }

                function handleDrop(e) {
                    e.preventDefault();
                    const targetRow = e.target.closest('tr');
                    if (targetRow && draggedRow !== targetRow) {
                        const container = document.getElementById('selectedItemsContainer');
                        container.insertBefore(draggedRow, targetRow);
                    }
                    resetDragStyles();
                }

                function resetDragStyles() {
                    document.querySelectorAll('#selectedItemsContainer tr').forEach(row => {
                        row.classList.remove('drag-over');
                    });
                }



                initializeDragDrop();

                function initializeRowDragDrop(row) {
                    row.setAttribute('draggable', true);
                    row.addEventListener('dragstart', handleDragStart);
                    row.addEventListener('dragover', handleDragOver);
                    row.addEventListener('dragenter', handleDragEnter);
                    row.addEventListener('dragleave', handleDragLeave);
                    row.addEventListener('drop', handleDrop);
                }

                $(document).ready(function () {
                    $('.action').select2({
                        tags: true,
                        createTag: function (params) {
                            // You can format the newly created tag here if needed
                            return {
                                id: params.term,
                                text: params.term,
                                newOption: true
                            };
                        }
                    });

                    dropdownCssClass: 'select2-dropdown-left-aligned-center'
                });
                // Function to handle adding the plus icon and its click event
                function addPlusButton(row) {
                    const plusTd = document.createElement('td');
                    plusTd.className = 'text-center';
                    const plusIcon = document.createElement('i');
                    plusIcon.className = 'fas fa-plus add-row';
                    plusIcon.onclick = function () {
                        addNewRow(row);
                    };
                    plusTd.appendChild(plusIcon);
                    row.appendChild(plusTd);
                }

                // Initialize the plus icon for existing rows
                document.querySelectorAll('#selectedItemsContainer tr').forEach(row => {
                    const iconCell = row.querySelector('.icon-col');
                    if (iconCell) {
                        iconCell.querySelector('.add-row').onclick = function () {
                            addNewRow(row);
                        };
                    }
                });

                // Function to handle the delete button's click event
                function addRowDeleteHandler(row) {
                    const deleteButton = row.querySelector('.delete-button');
                    deleteButton.onclick = function () {
                        deleteRow(this);
                    };
                    // Add plus button if it's a new row
                    if (row.querySelectorAll('.add-row').length === 0) {
                        addPlusButton(row);
                    }
                }

                // Set up delete handler for existing rows
                document.querySelectorAll('#selectedItemsContainer tr').forEach(row => {
                    addRowDeleteHandler(row);
                });

            });


            function openLocationModal(element) {
                const locationModal = new bootstrap.Modal(document.getElementById('locationModal'));
                locationModal.show();

                const locationText = element.value;
                document.getElementById('locationTextArea').value = locationText;

                const rowIndex = Array.from(document.querySelectorAll('.location')).indexOf(element);
                document.getElementById('locationTextArea').setAttribute('data-row-index', rowIndex);
            }

            function saveLocationText() {
                const locationText = document.getElementById('locationTextArea').value;
                const rowIndex = document.getElementById('locationTextArea').getAttribute('data-row-index');
                const locationInputs = document.querySelectorAll('.location');

                if (rowIndex !== null && locationInputs[rowIndex]) {
                    locationInputs[rowIndex].value = locationText;
                }

                // Close the modal using plain JavaScript
                const locationModal = document.getElementById('locationModal');
                locationModal.classList.remove('show');
                locationModal.style.display = 'none';
                locationModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('modal-open');
                document.querySelector('.modal-backdrop').remove();
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

                if (rowIndex !== null && reasonInputs[rowIndex]) {
                    reasonInputs[rowIndex].value = reasonText;
                }

                // Close the modal using plain JavaScript
                const reasonModal = document.getElementById('reasonModal');
                reasonModal.classList.remove('show');
                reasonModal.style.display = 'none';
                reasonModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('modal-open');
                document.querySelector('.modal-backdrop').remove();
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

                if (rowIndex !== null && disclaimerInputs[rowIndex]) {
                    disclaimerInputs[rowIndex].value = disclaimerText;
                }

                // Close the modal using plain JavaScript
                const disclaimerModal = document.getElementById('disclaimerModal');
                disclaimerModal.classList.remove('show');
                disclaimerModal.style.display = 'none';
                disclaimerModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('modal-open');
                document.querySelector('.modal-backdrop').remove();
            }



            function initializeModal(modalId, closeModalFunction) {
                let modalElement = document.getElementById(modalId);
                let modalInstance = new bootstrap.Modal(modalElement);
                modalElement.querySelector('.btn-close').addEventListener('click', closeModalFunction);
            }


            function calculateTotalCost(element) {
                const row = element.closest('tr');
                const quantity = parseFloat(row.querySelector('.quantity').value) || 0;
                const costPerUnit = parseFloat(row.querySelector('.cost-per-unit').value) || 0;
                const totalCost = row.querySelector('.total-cost');
                totalCost.textContent = (quantity * costPerUnit).toFixed(2);
            }

            function deleteRow(element) {
                const row = element.closest('tr');
                row.remove();
            }

            function passDataToPreview() {
                const productRows = document.querySelectorAll('.product-table tbody tr');

                const productData = Array.from(productRows).map(row => {
                    // Use querySelector to find the input field within the scope-of-work cell
                    const scopeOfWorkInput = row.querySelector('.scope-of-work input');
                    const scopeOfWork = scopeOfWorkInput ? scopeOfWorkInput.value.trim() : '';

                    return {
                        scopeOfWork: scopeOfWork,
                        action: row.querySelector('.action').value,
                        quantity: row.querySelector('.quantity').value,
                        unit: row.querySelector('.unit').value,
                        costPerUnit: row.querySelector('.cost-per-unit').value,
                        totalCost: row.querySelector('.total-cost').innerText,
                        location: row.querySelector('.location').value,
                        reason: row.querySelector('.reason').value,
                        disclaimer: row.querySelector('.disclaimer').value
                    };
                });
                const propertyAddress = document.getElementById("property-address").value;
                const workOrderNumber = document.getElementById("wo-number").value;
                let clientCode = document.getElementById("client-code").value.toString();

                // Conditionally extract digits based on the length of the client code
                if (clientCode.length === 3) {
                    clientCode = clientCode.substring(0, 1);
                } else if (clientCode.length === 4) {
                    clientCode = clientCode.substring(0, 2);
                }
                const encodedData = encodeURIComponent(JSON.stringify(productData));
                window.open(
                    `/preview3?data=${encodedData}&property-address=${propertyAddress}&wo-number=${workOrderNumber}&clientCode=${clientCode}`,
                    '_blank');
            }

        </script>
        <!-- Include jQuery, Popper.js, and Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Include Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</body>

</html>
