var _isEPub = false;
var _isApp = false;

var __base64Images = [];
__base64Images["./ElectrolysisofWaterVirtualLab/Screen Shot 2018-11-13 at 9.23.21 AM (2).png"]="data:image/png;base64,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";
