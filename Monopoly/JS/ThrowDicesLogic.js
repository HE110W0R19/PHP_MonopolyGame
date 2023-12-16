class DiceThrower {
    /**
     * @private
     * @type {number}
     */
    _leftPercentage= 0
    /**
     * @private
     * @type {number}
     */
    _rightPercentage= 0
    /**
     * @private
     * @type {number}
     */
    _topPercentage= 0
    /**
     * @private
     * @type {number}
     */
    _bottomPercentage= 0

    /**
     * @param Percleft
     * @param PercRight
     * @param PercTop
     * @param PercBottom
     * @constructor
     */
    Initialize (Percleft, PercRight, PercTop, PercBottom) {
        this._leftPercentage = Percleft;
        this._rightPercentage = PercRight;
        this._topPercentage = PercTop;
        this._bottomPercentage = PercBottom;
    }

    /**
     * @private
     * @method
     * @return {number}
     */
    GetRandomLeftPos(){
        let increment = (Math.random()*(this._rightPercentage - this._leftPercentage));
        return this._leftPercentage + increment;
    }

    /**
     * @private
     * @method
     * @return {number}
     */
    GetRandomTopPos(){
        let increment = (Math.random()*(this._bottomPercentage - this._topPercentage));
        return this._topPercentage + increment;
    }

    /**
     * @public
     * @method
     */
    RepositionDice(){
        const _this = this;
        $(".DiceMain").css("left", ()=>
        {
            return this.GetRandomLeftPos()+"px";
        }).css("top", ()=>
        {
            return this.GetRandomTopPos()+"px";
        });
    }
}

export default new DiceThrower();