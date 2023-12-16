class FieldResizer{
    /**
     *
     * @param sourceSelector {string}
     * @param targetSelector {string}
     * @constructor
     */
    ResizeContainer(sourceSelector, targetSelector){
        const source = $(sourceSelector);
        const sourceWidth = source.width();
        const sourceHeight = source.height();

        $(targetSelector).width(sourceWidth).height(sourceHeight);
    }
}

export default new FieldResizer();