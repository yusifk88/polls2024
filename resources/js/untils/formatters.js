import dayjs from "dayjs";

import relativeTime from "dayjs/plugin/relativeTime";
//make a date readable

const toMoney = function (num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
const humanDate = function (date) {

    if (!date){
        return date;
    }
    return dayjs(date).format("MMM D, YYYY")

}


//make a date-time readable
const humanDateTime = function (date) {

    return dayjs(date).format("MMM D, YYYY h:mm A")

}


const HexToRBG=function (hex){

        let hex_color = hex.replace("#", "")
            , r = parseInt(hex_color.substring(0, 2), 16)
            , g = parseInt(hex_color.substring(2, 4), 16)
            , b = parseInt(hex_color.substring(4, 6), 16);
        return 'rgb(' + r + ',' + g + ',' + b + ',0.1)';

}


const minorColor=function (hex){

        let hex_color = hex.replace("#", "")
            , r = parseInt(hex_color.substring(0, 2), 16)
            , g = parseInt(hex_color.substring(2, 4), 16)
            , b = parseInt(hex_color.substring(4, 6), 16);
        return 'rgb(' + r + ',' + g + ',' + b + ',0.1)';

}



const formatFileSize = function(sizeInBytes){

    if (sizeInBytes<1000){
        return {
            formaterd_size:sizeInBytes+"b",
            unit:"Bytes"
        }
    }

    if (sizeInBytes>=1000 && sizeInBytes<1000_000){

        const f = (sizeInBytes/1000);
        return {
            formaterd_size:f.toFixed(2)+"KB",
            unit:"Kilobytes"
        }

    }else if(sizeInBytes>=1000_000 && sizeInBytes<=1000_000_000) {

        const f = (sizeInBytes/1000_000);
        return {
            formaterd_size:f.toFixed(2)+"MB",
            unit:"Megabytes"
        }
    }else {


        const f = (sizeInBytes/1000_000_000);
        return {
            formaterd_size:f.toFixed(2)+"GB",
            unit:"Gigabyte"
        }
    }


}




const dateFromNow=function(date){
     dayjs.extend(relativeTime);
    return dayjs(date,"YYYY-MM-DD").fromNow();

}

export {
    humanDate,
    humanDateTime,
    HexToRBG,
    minorColor,
    dateFromNow,
    formatFileSize,
    toMoney
}
