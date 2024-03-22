<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Selection</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bid-analysis.css') }}">

</head>

<body>
    <div class="container">
        <h2 class="text-center">Bid Analysis Sheet</h2>
        <form id="itemForm">
            <div class="row mt-5  text-center">
                <div class="col-md-3">
                    <h3>Exterior</h3>
                    <div class="scrollable-table">
                    <table class="table table-bordered" id="exteriorTable">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" id="checkAllExterior"></th>
                                <th class="item-column">Item</th>
                                <th class="uom-column">UOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows for exterior will be added here -->
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-md-3">
                    <h3>Interior</h3>
                    <div class="scrollable-table">
                    <table class="table table-bordered" id="interiorTable">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" id="checkAllInterior"></th>
                                <th class="item-column">Item</th>
                                <th class="uom-column">UOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows for interior will be added here -->
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-md-3">
                    <h3>Roof</h3>
                    <div class="scrollable-table">
                    <table class="table table-bordered" id="roofTable">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" id="checkAllRoof"></th>
                                <th class="item-column">Item</th>
                                <th class="uom-column">UOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows for roof will be added here -->
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-md-3">
                    <h3>Plumbing</h3>
                    <div class="scrollable-table">
                    <table class="table table-bordered" id="plumbingTable">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" id="checkAllPlumbing"></th>
                                <th class="item-column">Item</th>
                                <th class="uom-column">UOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows for plumbing will be added here -->
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <h3>Checklist</h3>
                    <div class="scrollable-table">
                    <table class="table table-bordered" id="checklistTable">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" id="checkAllChecklist"></th>
                                <th class="item-column">Item</th>
                                <th class="uom-column">UOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows for checklist will be added here -->
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-md-3">
                    <h3>Property Items</h3>
                    <div class="scrollable-table">
                    <table class="table table-bordered" id="propertyItemsTable">
                        <thead>
                            <tr>
                                <th class="checkbox-column"><input type="checkbox" id="checkAllpropertyItems"></th>
                                <th class="item-column">Item</th>
                                <th class="uom-column">UOM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows for property items will be added here -->
                        </tbody>
                    </table>
                </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Populate tables with items
            populateTable('exteriorTable', [
                "Bilco Door",
                "Crawlspace",
                "Door",
                "Exterior Debris",
                "Extra Large Tree",
                "Fallen Tree",
                "Fence",
                "Fence Gate",
                "Grass",
                "Exterior Handrail",
                "Hazard Items",
                "Large Tree",
                "Medium Tree",
                "Overgrowth",
                "Saplings",
                "Shrubs",
                "Siding",
                "Small Tree",
                "Staircase",
                "Vines",
                "Window"
            ], [
                "EA",
                "EA",
                "EA",
                "CYD",
                "EA",
                "EA",
                "LF",
                "EA",
                "SF",
                "LF",
                "EA/CYD",
                "EA",
                "EA",
                "SF",
                "EA",
                "LF",
                "SF",
                "EA",
                "LF",
                "SF",
                "EA"
            ]);
            populateTable('interiorTable', [
                "Ceiling - Damage",
                "Ceiling - Mold",
                "Clean and Sanitize",
                "Interior Debris",
                "Floor",
                "Interior Handrail",
                "Hazardous Debris",
                "Humidifier",
                "Damprid",
                "Panelling",
                "Personal Debris",
                "Sales clean",
                "Maid Refresh",
                "Wall Trim",
                "Wall - Damage",
                "Wall - Mold",
                "Flood",
                "Winterization (Dry)",
                "Winterization (Wet)",
                "Structural Inspection",
                "Lead Inspection",
                "Asbestos Inspection",
                "Electrical Inspection",
                "HVAC Inspection",
            ], [
                "SF",
                "SF",
                "EA",
                "CYD",
                "SF",
                "LF",
                "EA",
                "EA",
                "EA",
                "SF",
                "CYD",
                "EA",
                "EA",
                "LF",
                "SF",
                "SF",
                "SF",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
            ]);
            populateTable('roofTable', [
                "Roof Bid - Entire",
                "Roof Bid - Partial",
                "Chimney Cap",
                "Downspout",
                "Downspout Extension",
                "Fascia",
                "Flashing",
                "Gutter",
                "Ridge Cap",
                "Roof Vent",
                "Shingles",
                "Soffit",
                "Tar Patch",
                "Tarp",
                "Roof Inspection",
            ], [
                "SF",
                "SF",
                "EA",
                "LF",
                "LF",
                "LF",
                "EA",
                "LF",
                "EA",
                "EA",
                "SF",
                "LF",
                "SF",
                "SF",
                "EA",
            ]);
            populateTable('plumbingTable', [
                "Bathtub",
                "Cap Plumbing Lines",
                "Faucet",
                "Pressure Test",
                "Shower Head",
                "Sink",
                "Toilet",
                "Vanity",
                "Water supply - city",
                "Water supply - well",
                "P-Tarp",
                "Dryer Vent",
                "Plumbing Lines",
                "Plumbing Inspection",
            ], [
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
            ]);

            populateTable('checklistTable', [
                "A/C Unit",
                "Air Handler",
                "Boiler",
                "Dishwasher",
                "Furnace",
                "HWH",
                "Microwave",
                "TV",
                "Refrigerator",
                "Mattress",
                "Paint Can",
                "Stove",
                "Sump pump",
                "Washing Machine",
                "Secured",
            ], [
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
            ]);

            populateTable('propertyItemsTable', [
                "Barn",
                "Basement Door",
                "Carport",
                "Deck",
                "Garage",
                "Grafitti Interior",
                "Grafitti Exterior",
                "Playset",
                "Pool",
                "Shed",
                "Spa",
                "Trampoline",
                "Vehicle",
                "Tires",
            ], [
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
                "EA",
            ]);

        // Add "Check All" functionality
        addCheckAllListener('exteriorTable', 'checkAllExterior');
        addCheckAllListener('interiorTable', 'checkAllInterior');
        addCheckAllListener('roofTable', 'checkAllRoof');
        addCheckAllListener('plumbingTable', 'checkAllPlumbing');
        addCheckAllListener('checklistTable', 'checkAllChecklist');
        addCheckAllListener('propertyItemsTable', 'checkAllpropertyItems');
        });

        function populateTable(tableId, items, uom) {
            const table = document.getElementById(tableId);
            const tbody = document.createElement('tbody');
            items.forEach((item, index) => {
                const row = tbody.insertRow();
                const cellCheckbox = row.insertCell(0);
                const cellItem = row.insertCell(1);
                const cellUOM = row.insertCell(2);

                cellCheckbox.innerHTML = `<input type="checkbox" name="${tableId}[]" value="${item}">`;
                cellItem.textContent = item;
                cellUOM.textContent = uom[index];
            });
            table.appendChild(tbody);
        }

        function addCheckAllListener(tableId, checkAllId) {
            const checkAllBox = document.getElementById(checkAllId);
            checkAllBox.addEventListener('change', function () {
                const checkboxes = document.querySelectorAll(`#${tableId} input[type='checkbox']`);
                checkboxes.forEach(checkbox => checkbox.checked = this.checked);
            });
        }

        document.getElementById('itemForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const selectedItems = {
                exterior: getSelectedItems('exteriorTable'),
                interior: getSelectedItems('interiorTable'),
                roof: getSelectedItems('roofTable'),
                plumbing: getSelectedItems('plumbingTable'),
                checklist: getSelectedItems('checklistTable'),
                propertyItems: getSelectedItems('propertyItemsTable'),
            };

            const data = encodeURIComponent(JSON.stringify(selectedItems));
            window.open(`/preview2?selectedItems=${data}`, '_blank');

            function getSelectedItems(tableId) {
                return Array.from(document.querySelectorAll(`input[name="${tableId}[]"]:checked`)).map(cb => cb
                    .value);
            }
        });

        function getSelectedItems(tableId) {
            return Array.from(document.querySelectorAll(`#${tableId} input[type='checkbox']:checked`)).map(checkbox =>
                checkbox.value);
        }

    </script>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
