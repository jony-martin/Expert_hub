<script>
    // DataTable Initialization
    const datatableElement = document.querySelector(".common-products");
    if (datatableElement) {
        const datatable = new DataTable(datatableElement, {
            ajax: {
                url: datatableElement.dataset.url,
                method: "GET",
                dataSrc: "",
            },
            columns: JSON.parse(datatableElement.dataset.columns),
            processing: true,
            ordering: true,
            order: JSON.parse(datatableElement.dataset.order || "[]"),
            layout: {
                topStart: {
                    rowClass: "row m-1 my-0 justify-content-center",
                    features: [{
                        buttons: [{
                            extend: "collection",
                            className: "btn btn-label-secondary dropdown-toggle",
                            text: `<span class="d-flex align-items-center gap-2">
                                    <i class="icon-base ti tabler-upload icon-xs"></i>
                                    <span class="d-none d-sm-inline-block">Export</span>
                                </span>`,
                            buttons: [{
                                    extend: "print",
                                    text: `<i class="icon-base ti tabler-printer me-1"></i>Print`,
                                    className: "dropdown-item"
                                },
                                {
                                    extend: "csv",
                                    text: `<i class="icon-base ti tabler-file-text me-1"></i>Csv`,
                                    className: "dropdown-item"
                                },
                                {
                                    extend: "excel",
                                    text: `<i class="icon-base ti tabler-file-spreadsheet me-1"></i>Excel`,
                                    className: "dropdown-item"
                                },
                                {
                                    extend: "pdf",
                                    text: `<i class="icon-base ti tabler-file-description me-1"></i>Pdf`,
                                    className: "dropdown-item"
                                },
                                {
                                    extend: "copy",
                                    text: `<i class="icon-base ti tabler-copy me-1"></i>Copy`,
                                    className: "dropdown-item"
                                },
                            ]
                        }]
                    }]
                },
                topEnd: {
                    rowClass: "row m-1 my-0 justify-content-center",
                    features: [{
                        search: {
                            placeholder: "Search",
                            text: "_INPUT_"
                        }
                    }]
                },
                bottomStart: {
                    rowClass: "row mx-3 justify-content-between",
                    features: ["info"]
                },
                bottomEnd: "paging"
            },
            responsive: {
                details: {
                    display: DataTable.Responsive.display.modal({
                        header: () => "Details"
                    }),
                    type: "column",
                    renderer: function(api, rowIdx, columns) {
                        const rows = columns
                            .map(col => col.title ? `<tr data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}">
                                    <td>${col.title}:</td><td>${col.data}</td></tr>` : "")
                            .join("");
                        if (!rows) return;

                        const wrapper = document.createElement("div");
                        wrapper.classList.add("table-responsive");

                        const table = document.createElement("table");
                        table.classList.add("table");

                        const tbody = document.createElement("tbody");
                        tbody.innerHTML = rows;

                        table.appendChild(tbody);
                        wrapper.appendChild(table);
                        return wrapper;
                    }
                }
            },
            drawCallback: function() {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll(
                    '[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            }
        });

        // Style Adjustments After DataTable Init
        const adjustClasses = [{
                selector: ".dt-buttons .btn",
                remove: "btn-secondary"
            },
            {
                selector: ".dt-search .form-control",
                remove: "form-control-sm"
            },
            {
                selector: ".dt-length .form-select",
                remove: "form-select-sm",
                add: "ms-0"
            },
            {
                selector: ".dt-length",
                add: "mb-md-6 mb-0"
            },
            {
                selector: ".dt-layout-start",
                remove: "justify-content-between",
                add: "d-flex gap-md-4 justify-content-md-between justify-content-center gap-2 flex-wrap w-auto pe-0"
            },
            {
                selector: ".dt-layout-end",
                remove: "justify-content-between",
                add: "d-flex gap-md-4 justify-content-md-between justify-content-center gap-2 flex-wrap w-auto ps-0"
            },
            {
                selector: ".dt-buttons",
                remove: "mb-4",
                add: "d-flex gap-4 mb-md-0 mb-0"
            },
            {
                selector: ".dt-layout-table",
                remove: "row mt-2"
            },
            {
                selector: ".dt-layout-full",
                remove: "col-md col-12",
                add: "table-responsive"
            },
        ];

        setTimeout(() => {
            adjustClasses.forEach(({
                selector,
                remove,
                add
            }) => {
                document.querySelectorAll(selector).forEach(el => {
                    remove?.split(" ").forEach(cls => el.classList.remove(cls));
                    add?.split(" ").forEach(cls => el.classList.add(cls));
                });
            });
        });
    }
</script>
