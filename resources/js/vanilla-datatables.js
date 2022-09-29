import {DataTable} from "simple-datatables"
const dataTable = new DataTable("#myTable");
document.querySelector("input.csv").addEventListener("click", () => {
    dataTable.export({
        type:"csv",
        download: true,
        lineDelimiter: "\n\n",
        columnDelimiter: ";"
    })
})
