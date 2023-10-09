
import React from "react";
import { useState } from "react";
import { Link, Head } from '@inertiajs/react';

export default function Hello({name}){

    return (
        <>
            <div>
                <Head title="Hello"/>
                <h1>Hello {name}</h1>
            </div>
        </>
    )
}
