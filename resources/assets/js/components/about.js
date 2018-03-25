import React from 'react';

export default class About extends React.Component {
    render() {
        const { image, description } = this.props;
        return (
            <div id="about">
                <div className="row">
                    <div className="col-sm-12 main-title text-center">
                        <h1 className="main-title">Présentation</h1>
                    </div>
                </div>

                <div className="row">
                    <div className="col-sm-4 offset-2">
                        <img src={image} alt=""/>
                    </div>
                    <div className="col-sm-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac nulla ut odio pellentesque pellentesque ut eu eros. Nunc in feugiat velit. Praesent elit sapien, porta vitae arcu ut, accumsan ullamcorper turpis. Aenean malesuada et odio non convallis. Sed sit amet nisl a orci commodo hendrerit. Nulla eu dolor mollis, aliquam arcu nec, accumsan justo. Pellentesque blandit lobortis nulla ac fringilla. Pellentesque varius interdum orci et tempus. Praesent sapien sem, hendrerit commodo commodo vel, pretium non elit. Integer ut sapien ut nisl pretium congue.

                            Aliquam in mauris sollicitudin, rhoncus sem sit amet, feugiat arcu. Cras viverra consectetur interdum. Nulla facilisi. Nulla facilisi. Curabitur vitae nibh a tellus accumsan maximus. Aliquam quis ultricies arcu, at mattis libero. Nunc nec commodo magna. Sed vestibulum id metus non auctor.
                        </p>
                    </div>
                </div>
            </div>
        )
    }
}